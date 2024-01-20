<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Redirect;


class WebuserController extends Controller
{
    public function index(Request $request){
        $users = DB::table('webusers');
        if(!empty($request->keyword)){
            $users = $users->where('name','like','%'.$request->keyword.'%');
            $users = $users->orWhere('mobile','like','%'.$request->keyword.'%');
        }
        $users = $users->paginate(10);
        if(!empty($request->keyword)){
            $querystringArray = ['keyword' => $request->keyword];
            $users->appends($querystringArray);
        }

        return view('admin/users/users',compact('users'));
    }
    public function addUser(){
        return view('admin/users/add_edit_user');
    }
    public function editUser($id){
        $user = DB::table('webusers')->where('id',$id)->first();
        return view('admin/users/add_edit_user',compact('user'));
    }
    public function saveUser(Request $request){
        //echo "<pre>"; print_r($request->all()); die;
        $rule  =  array(
            'name'       => 'required|max:120',
            'email'      => 'required|email',
            'mobile'     => 'required|min:10|numeric',
            'profile_image' => 'mimes:png,jpg,jpeg|max:2048'
            ) ;
        $validator = Validator::make($request->all(),$rule);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        // $inputData = $request->except(['_token','user_id']);
        
        $inputData = array(
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address
        );

        if($request->file('profile_image')) {
            $file = $request->file('profile_image');
            $filename = time()."-".$file->getClientOriginalName();
            $file->move('uploads',$filename);
            $filepath = 'uploads/'.$filename;
            $inputData['profile_image']=$filepath;
        }

        if(!empty($request->user_id)){
            DB::table('webusers')->where('id',$request->user_id)->update($inputData);
            return redirect()->route('users.users')->with('success','User has been updated successfully.');
        }else{
            DB::table('webusers')->insert($inputData);
            return redirect()->route('users.users')->with('success','User has been created successfully.');
        }        
    }
    public function deleteUser($id){
        DB::table('webusers')->where('id',$id)->delete();
        return redirect()->route('users.users')->with('success','User has been deleted successfully.');
    }
}
