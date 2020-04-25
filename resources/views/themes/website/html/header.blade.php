<header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{url("/")}}">
                                        <h4>Green Earth</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="" href="{{url("/")}}">home</a></li>
                                            @foreach(\App\Category::all() as $c)
                                                <li><a href="contact.html">{{$c->category_name}}</a></li>
                                            @endforeach
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i> 10(256)-928 256</p>
                                    </div>
                                    <div class="main-menu  d-none d-lg-block">
                                    <ul>
                                        @if(!Auth::check())
                                            <li><a href="#" class="login" data-toggle="modal" data-target="#myModal">
                                                Đăng nhập
                                            </a></li>
                                        @else
                                            <li><a href="#">
                                            {{Auth::user()->name}}<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">My account</a></li>
                                                    <li><a href="{{url("/logout")}}">Logout</a></li>
                                                </ul>
                                            </li>
                                        @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>