@extends('themes.website.layout.layout')



@section('content')

<div class="container" style="padding-bottom:5%;padding-top:5%;padding-left:22%;">	
	<div class="newsletter-widget col-md-6" style="border-radius:4%;">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

		<h4><i style="font-size:200%" class="fa fa-lock"></i></h4>
		<h4 style="padding-bottom:10%;">Reset Password</h4>
		<form  method="POST" action="{{ route('password.email') }}">
		@csrf
			<input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

			<button type="submit" class="btn w-100">{{ __('Send Password Reset Link') }}</button>
		</form>
	</div>
</div>

@endsection
