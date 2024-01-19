<x-app-layout>
    
        <div class="row mt-3">
            <div class="col-lg-9">
                <div class="card">
                <div class="card-body">
                <div class="card-title">Add User</div>
                <hr>
                <form method="post" action="{!! route('users.save') !!}" enctype="multipart/form-data">@csrf
                    <input type="hidden" name="user_id" value="{{ old('user_id', $user->id ?? '') }}">
                <div class="form-group">
                    <label for="input-1">Name</label>
                    <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name" name="name" value="{{ old('name', $user->name ?? '') }}">
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                </div>
                <div class="form-group">
                    <label for="input-2">Email</label>
                    <input type="text" class="form-control" id="input-2" placeholder="Enter Your Email Address" name="email" value="{{ old('email', $user->email ?? '') }}">
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                </div>
                <div class="form-group">
                    <label for="input-3">Mobile</label>
                    <input type="text" class="form-control" id="input-3" placeholder="Enter Your Mobile Number" name="mobile" value="{{ old('mobile', $user->mobile ?? '') }}">
                    <div class="text-danger">{{ $errors->first('mobile') }}</div>
                </div>
                <div class="form-group">
                    <label for="input-4">Address</label>
                    <!-- <input type="text" class="form-control" id="input-4" placeholder="Enter Password"> -->
                    <textarea id="" class="form-control" cols="30" rows="4" placeholder="Enter Address" name="address">{{ old('address', $user->address ?? '') }}</textarea>
                    <div class="text-danger">{{ $errors->first('address') }}</div>
                </div>
                <div class="form-group">
                    <label for="input-5">Profile Image</label>
                    @if(isset($user->profile_image))
                    <img src="{{ url($user->profile_image) }}"  class="usrImgTbl">
                    @endif
                    <input type="file" class="form-control" id="input-5" name="profile_image" value="{{ old('profile_image', request()->input('profile_image')) }}">
                    <div class="text-danger">{{ $errors->first('profile_image') }}</div>
                </div>           
                <div class="form-group">
                    <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Save</button>
                </div>
                </form>
                </div>
                </div>
            </div>
        </div><!--End Row-->
 
</x-app-layout>