<x-app-layout>
@if ($message = Session::get('success'))
            <div class="text-success">
                <p>{{ $message }}</p>
            </div>
@endif
<div class="row mt-3">        
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <div>
                <h5 class="card-title tblhead" id="wide">Users Data </h5>
                  <div >
                  <form action="" class="search-bar" method="get">
                  <input type="text" name="keyword" class="form-control" placeholder="Enter keywords" value="{{ request()->keyword}}">
                  <input type="submit" value="Search" class="srch-btn">
                  </form>
                  </div>                  
                <h5 class="addnew" id="narrow"><a href="{!! route('users.add') !!}">Add New</a></h5>
              </div> -->
              <div class="row"> 
                <div class="col-3">Users Data</div>
                <div class="col-6 ">
                  <form action="" class="search-bar srch-tbl" method="get">
                  <input type="text" name="keyword" class="form-control src-input" placeholder="Enter keywords" value="{{ request()->keyword}}">
                  <input type="submit" value="Search" class="srch-btn">
                  </form>
                </div>
                <div class="col-3" style="text-align: right"><a href="{!! route('users.add') !!}">Add New</a></div>
              </div>
                
              
			  <div class="table-responsive">
              <table class="table table-bordered overflow-hidden" style="overflow-x:auto;">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if(isset($users) && count($users) > 0)
                    @foreach($users as $value)
                  <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                    <td><img src="{{ $value->profile_image ?url($value->profile_image):url('assets/images/no-image.png') }}" alt="{{$value->name}}"  class="usrImgTbl"></td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->mobile}}</td>
                    <td>{{$value->address}}</td>
                    <td><a href="{!! route('users.edit',$value->id) !!}"><i class="fa fa-edit"></i></a> &nbsp;&nbsp;<a href="{!! route('users.delete',$value->id) !!}" onclick="return confirm('Are you sure want to delete this user?')"><i class="fa fa-trash"></i></a> </td>
                  </tr>
                  @endforeach                  
                  @else
                  <tr>                    
                    <td colspan="7">No data found</td>
                  </tr>
                  @endif                  
                </tbody>
              </table>                        
            </div>
            </div>
            <div class="pagination">{{ $users->links() }}</div>
          </div>              
        </div>
      </div><!--End Row-->
</x-app-layout>