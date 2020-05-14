@extends('themes.website.layout.layout')



@section('content')

<div class="container col-md-4 col-md-offset-3" style="padding-top:10%;padding-bottom:10%">	
	<div class="border">
		<aside class="single_sidebar_widget search_widget" style="padding:10%;border-radius:10%;">
			<form method="POST" action="{{ route('register') }}">
			@csrf
			<div class="form-group">
			<h3 class="text-center">Account Register</h3>
				<div class="input-group mb-3">
					<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('email') }}" placeholder='Name'
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
						@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>	
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
					<input type="text" class="form-control password @error('password') is-invalid @enderror" name="password" placeholder='Password'
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="input-group mb-3">
					<input id="password-confirm" type="password" class="form-control password" name="password_confirmation" placeholder='Confirm Password'
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
				</div>
			<button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn">{{ __('Register') }}</button>
			</form>
			<div class="col-md-12 text-center" style="padding-top:5%">
				<a href="{{ route('login') }}">
					<p>You are member. Sign in now !</p>
				</a>
			</div>
		</aside>
	</div>
</div>
@endsection
