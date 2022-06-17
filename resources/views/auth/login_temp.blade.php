<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<link rel="icon" type="image/png" href="{{ asset('register_login/images/icons/favicon.ico') }}" />
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('register_login/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register_login/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register_login/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register_login/vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register_login/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register_login/vendor/daterangepicker/daterangepicker.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('register_login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('register_login/css/main.css')}}">
	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">

					<div class="flex justify">
						<div class="bg-gray-100 w-24 h-24 rounded-full hover:bg-gray-300">
							<a href="/"><img class="rounded mx-auto d-block " src="/register_login/images/logo register.png" alt=""></a>
						</div>
					</div>

					<span class="login100-form-title p-b-43">
						Hello Again!
					</span>

					

					<div class="mt-4">
						<x-jet-label for="email" value="{{ __('Email') }}" />
						<x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
					</div>

					<div class="mt-4">
						<x-jet-label for="password" value="{{ __('Password') }}" />
						<x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
					</div>

					
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Remember me</label>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="d-flex flex-row-reverse">
						<div class="p-2">Don`t have an account? <a href="/register" class="link-secondary ">Register</a></div>
					</div>

			</div>
			</form>

			<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
			</div>
		</div>
	</div>
	</div>





	<!--===============================================================================================-->
	<script src="{{ asset('register_login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('register_login/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('register_login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('register_login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('register_login/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('register_login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('register_login/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('register_login/vendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('register_login/js/main.js')}}"></script>

</body>

</html>