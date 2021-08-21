<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="{{ asset('assets/image/png') }}" href="{{ asset('assets/images/icons/favicon.ico') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/vendor/animate/animate.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/css/main.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login70-pic js-tilt" data-tilt style="margin-top: -75px;">
					<img src="{{ asset('assets/asset/images/img-01.png') }}" alt="IMG">
				</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

					<span class="login100-form-title" style="margin-top: -100px;">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-80">
						<a class="txt2" href="{{ route('register') }}">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	
	<script src="{{ asset('assets/asset/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/asset/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets/asset/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/asset/vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset('assets/asset/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/asset/js/main.js') }}"></script>
</body>
</html>