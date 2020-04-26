@extends('themes.website.layout.layout')



@section('content')
<div class="limiter">
		<div class="container-login100" style="background-image: url('https://i.pinimg.com/originals/89/4b/3f/894b3f78da22d2ba0fa89274cea0d4a4.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Register
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('register') }}">
                    @csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter username" data-validate = "Valid email is required: ex@abc.xyz">
						<input  id="name" class="input100  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username" data-validate = "Valid email is required: ex@abc.xyz">
						<input  id="email" class="input100  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username" data-validate = "Valid email is required: ex@abc.xyz">
						<input  id="password" type="password" class="input100  @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username" data-validate = "Valid email is required: ex@abc.xyz">
						<input  id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="password confirmation">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button  type="submit" class="login100-form-btn">
                        {{ __('Register') }}
						</button>
					</div>
					<div class="container-login100-form-btn m-t-32 text-center">
						<a class="btn btn-link" href="{{ route('login') }}">
							<p>You are member. Sign in now !</p>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
