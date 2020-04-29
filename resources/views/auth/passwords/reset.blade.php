@extends('themes.website.layout.layout')



@section('content')

<div class="container" style="padding-bottom:5%;padding-top:5%;padding-left:22%;">	
	<div class="newsletter-widget col-md-6" style="border-radius:4%;">
        <h4><i style="font-size:200%" class="fa fa-unlock"></i></h4>
		<h4 style="padding-bottom:10%;">Reset Password</h4>
		<form  method="POST" action="{{ route('password.update') }}">
		@csrf
			<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

			<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

			<button type="submit" class="btn w-100">{{ __('Reset Password') }}</button>
		</form>
	</div>
</div>

@endsection