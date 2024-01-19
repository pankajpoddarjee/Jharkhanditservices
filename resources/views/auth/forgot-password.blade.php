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
            
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <form method="POST" action="{{ route('password.email') }}">
            @csrf
                <div><p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p></div>
                <div style="color:#5feb5f"><x-auth-session-status class="mb-4" :status="session('status')" /></div>
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Username</label>
			   <div class="position-relative has-icon-right">
				  
                  <!-- <x-text-input id="email" class="form-control input-shadow" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter Username"/> -->
                  <x-text-input id="email" class="form-control input-shadow" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter Email"/>
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  
			
			 <!-- <button type="button" class="btn btn-light btn-block">Sign In</button> -->
             <x-primary-button class="btn btn-light btn-block">
             {{ __('Email Password Reset Link') }}
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
