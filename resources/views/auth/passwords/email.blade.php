@extends('themes.website.layout.layout')



@section('content')

<div class="container col-md-4 col-md-offset-3" style="padding-top:5%;padding-bottom:10%">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif	
	<div class="border">
		<aside class="single_sidebar_widget search_widget" style="padding:10%;border-radius:10%;">
			<form method="POST" action="{{ route('password.email') }}">
			@csrf
			<div class="form-group">
			<h3 class="text-center">Reset Password</h3>
				<div class="input-group mb-3">
					<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder='Email'
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
			<button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
			type="submit">{{ __('Send Password Reset Link') }}</button>
			</form>
		</aside>
	</div>
</div>
@endsection
