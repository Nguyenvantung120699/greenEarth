@extends('themes.website.layout.layout')



@section('content')
<div class="container col-md-4 col-md-offset-3" style="padding-top:5%;padding-bottom:10%">	
	<div class="border">
		<aside class="single_sidebar_widget search_widget" style="padding:10%;border-radius:10%;">
			<form method="POST" action="{{ route('login') }}">
			@csrf
			<div class="form-group">
			<h3 class="text-center">Login Account</h3>
				<div class="input-group mb-3">
					<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder='Email'
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control password @error('password') is-invalid @enderror" name="password" placeholder='Password'
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
			<button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
			type="submit">{{ __('Login') }}</button>
			</form>
			<div class="col-md-12" style="padding-top:5%">
				<div class="row">
					<div class="col-md-6 text-gray">
						<a href="{{ route('password.request') }}">
							<p>{{ __('Forgot Password?') }}</p>
						</a>
					</div>
					<div class="col-md-6 text-gray">
						<a href="{{ route('register') }}">
							<p>Sign up now !</p>
						</a>
					</div>
				</div>
			</div>
		</aside>
	</div>
</div>
@endsection