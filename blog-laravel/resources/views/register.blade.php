<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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
                <div class="login100-pic js-tilt" data-tilt style="margin-top: -20px;">
					<img src="{{ asset('assets/asset/images/img-02.png') }}" alt="IMG">
				</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

					<span class="login100-form-title" style="margin-top: -100px;">
						Register
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid name is required: esa">
						<input class="input100 form-control @error('name') is-invalid @enderror" type="name" name="name" placeholder="Name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-user" aria-hidden="true"></i>
						</span>
					</div>

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

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 form-control" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                            {{ __('Register') }}
						</button>
					</div>

                    <div class="text-center mt-4 mb-4">
						<span class="txt1">
							Back to
						</span>
						<a class="txt2" href="{{ route('login') }}">
							Login
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