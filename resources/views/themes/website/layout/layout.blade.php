<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">


@include('themes.website.html.head')
<body class="preloading">

<!-- Start Header Area -->
@include('themes.website.html.header')
@yield("content")
@include('themes.website.html.footer')

@yield('popup')
<!-- Modal -->
<!-- Modal -->
@if(!Auth::check())
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="slider-area ">
                <!-- Mobile Menu -->
                <div class="slider-active">
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- form -->
                            <form method="get" action="{{asset('search')}}" class="search-box">
                                <div class="input-form mb-30">
                                    <input name="key" type="text" placeholder="Green Earth Search" required>
                                </div>
                                <div class="search-form mb-30">
                                    <button type="submit" class="btn btn-warning">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>