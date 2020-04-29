@extends('themes.website.layout.layout')



@section('content')

<div class="container" style="padding-bottom:5%;padding-top:5%;padding-left:22%;">	
	<div class="newsletter-widget col-md-6" style="border-radius:4%;">
		<h4><i style="font-size:200%" class="fa fa-user-plus"></i></h4>
		<h4 style="padding-bottom:10%;">Account Register</h4>
		<form  method="POST" action="{{ route('register') }}">
		@csrf
			<input id="name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
			@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror

			<input id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
			@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror

			<input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="password">
			@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror

			<input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="password confirmation">

			<button type="submit" class="btn w-100">{{ __('Register') }}</button>
			<div class="col-md-12 text-center">
				<a class="btn btn-link" href="{{ route('login') }}">
					<p>You are member. Sign in now !</p>
				</a>
			</div>
		</form>
	</div>
</div>
@endsection
