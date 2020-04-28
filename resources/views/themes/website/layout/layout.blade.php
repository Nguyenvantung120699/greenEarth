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
			<div class="newsletter-widget">
                <h4><i style="font-size:200%" class="fa fa-sign-in"></i></h4>
		        <h4 style="padding-bottom:10%;">Login Account</h4>
				<form action="#" method="post">
				@csrf
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<button id="login" type="button" class="btn w-100">Login</button>
				</form>
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