<!DOCTYPE html>
<html class="no-js" lang="zxx">


@include('themes.website.html.head')
<body>

	<!-- Start Header Area -->
@include('themes.website.html.header')
@yield("content")
@include('themes.website.html.footer')

@yield('popup')
<!-- Modal -->
@if(!Auth::check())
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="limiter">
		<div class="container-login100" style="background-image: url('https://i.pinimg.com/originals/89/4b/3f/894b3f78da22d2ba0fa89274cea0d4a4.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form action="#" method="POST" class="login100-form validate-form p-b-33 p-t-5">
				@csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter username" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" name="email" type="text" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button id="login" type="button" class="login100-form-btn">
						        Login
						</button>
					</div>
						<div class="container-login100-form-btn m-t-32 text-center">
						<a class="btn btn-link" href="{{ route('register') }}">
							<p>Not a member. Sign up now !</p>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    </div>
</div>
</div>
<script type="text/javascript">
        $("#login").bind("click",function () {
           $.ajax({
               url: "{{url("postLogin")}}",
               method: "POST",
               data: {
                   _token: $("input[name=_token]").val(),
                   email: $("input[name=email]").val(),
                   password: $("input[name=password]").val(),
               },
               success: function (res) {
                   if(res.status){
                        location.reload();
                   }else{
                       alert(res.message);
                   }
               }
           });
        });
    </script>
@endif
</body>
</html>