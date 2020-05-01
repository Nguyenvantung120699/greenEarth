<header class="header-area">

<!-- Top Header Area -->
<div class="top-header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-header-content d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{url("/")}}"><h1 class="text-white">Green Earth</h1></a>
                    </div>

                    <!-- Login Search Area -->
                    <div class="login-search-area d-flex align-items-center">
                        <!-- Login -->
                        <div class="login d-flex">
                                @if(!Auth::check())
                                   <div>
                                    <a href="#" class="login btn btn-default" data-toggle="modal" data-target="#myModal">
                                        <i style="font-size:100%" class="fa fa-sign-in"></i> Login
                                        </a>
                                    <a href="{{url("/register")}}" class="login nav-link" >
                                        <i style="font-size:100%" class="fa fa-user-plus"></i> Register
                                    </a>
                                   </div>
                                @else
                                <a href="#" class="login nav-link" >
                                    <i style="font-size:100%" class="fa fa-user-circle"></i> {{Auth::user()->name}}
                                </a>
                                <a href="{{url("/logout")}}"><i class="fa fa-arrow-right"></i>Logout</a>
                            @endif

                        </div>
                        <!-- Search Form -->
                        <div class="search-form">
                            <form action="{{url("/search")}}" method="get">
                                @csrf
                                <input type="search" name="key" class="form-control" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navbar Area -->
<div class="newspaper-main-menu" id="stickyMenu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="{{asset("img/core-img/logo.png")}}" alt=""></a>
                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li class="#"><a href="{{url("/")}}">Home</a></li>
                            @foreach(\App\Category::all() as $c)
                                <li><a href="{{url("/chuyenmuc",["path"=>$c->path])}}">{{$c->category_name}}</a></li>
                            @endforeach
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>