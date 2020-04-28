@extends('themes.website.layout.layout')



@section('content')

<div class="container" style="padding-bottom:5%;padding-top:5%;padding-left:22%;">	
	<div class="newsletter-widget col-md-6" style="border-radius:4%;">
		<h4><i style="font-size:200%" class="fa fa-sign-in"></i></h4>
		<h4 style="padding-bottom:10%;">Login Account</h4>
		<form  method="POST" action="{{ route('login') }}">
		@csrf
			<input class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" type="text" placeholder="Email">
			@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
			<input type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
			@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
			<button type="submit" class="btn w-100">{{ __('Login') }}</button>
			<div class="col-md-12">
				<div class="row">	
					<div class="col-md-6 text-left" style="padding:0;">
						<a class="btn btn-link" href="{{ route('register') }}">
							<p>Not a member. Sign up now ! </p>
						</a>
					</div>
					<div class="col-md-6 text-left">
						@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
								<p>{{ __('Forgot Your Password?') }}</p>
							</a>
						@endif
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection