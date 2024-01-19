<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Jharkhand IT Services</title>
  <!-- loader-->
  <!-- <link href="assets/css/pace.min.css" rel="stylesheet"/> -->
  <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet">
  <!-- <script src="assets/js/pace.min.js"></script> -->
  <script src="{{asset('assets/js/pace.min.js')}}"></script>
  <!--favicon-->
  <!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"/> -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <!-- <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/> -->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>

  <!-- Icons CSS-->
  <!-- <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/> -->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <!-- <link href="assets/css/app-style.css" rel="stylesheet"/> -->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>

  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{asset('assets/images/logo-icon.png')}}" alt="logo icon">
		 	</div>
             <x-auth-session-status class="mb-4" :status="session('status')" />
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <form method="POST" action="{{ route('login') }}">
            @csrf
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Username</label>
			   <div class="position-relative has-icon-right">
				  <!-- <input type="text" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Username"> -->
                  <x-text-input id="email" class="form-control input-shadow" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter Username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <!-- <input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password"> -->
                  <x-text-input id="password" class="form-control input-shadow"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Enter Password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <!-- <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label> -->
                <label for="remember_me" class="" style="padding-left: 0px !important;">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <!-- <a href="reset-password.html">Reset Password</a> -->
              @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Reset Password') }}
                </a>
              @endif
			 </div>
			</div>
			 <!-- <button type="button" class="btn btn-light btn-block">Sign In</button> -->
             <x-primary-button class="btn btn-light btn-block">
                {{ __('Log in') }}
            </x-primary-button>
			  <!-- <div class="text-center mt-3">Sign In With</div> -->
			  
			 <!-- <div class="form-row mt-4">
			  <div class="form-group mb-0 col-6">
			   <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
			 </div>
			 <div class="form-group mb-0 col-6 text-right">
			  <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
			 </div>
			</div> -->
			 
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Do not have an account? <a href="{{ route('register') }}"> Sign Up here</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</body>
</html>
