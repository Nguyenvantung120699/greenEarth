<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset("img/logo/green_earth.jpg")}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="header-info-left">
                                <ul>                          
                                    <li>tungnvth1903001@fpt.edu.vn</li>
                                    <li>nambpth1902008@fpt.edu.vn</li>
                                    <li>Ton That Thuyet street Ha Noi</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-info-right f-right">
                                <ul class="header-social">    
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                   <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                <a href="{{url("/")}}"><img src="{{asset("img/logo/logoG1.jpg")}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>               
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="{{url("/")}}">Home</a></li>
                                            <li><a href="#">Category</a>
                                                <ul class="submenu">
                                                @foreach(\App\Category::all() as $c)
                                                    <li><a href="{{url("/chuyenmuc",["path"=>$c->path])}}">{{$c->category_name}}</a></li>
                                                @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About US</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="#"><i style="font-size:150%" class="fa fa-language"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{asset('/setLocal-vn')}}">VN</a></li>
                                                    <li><a href="{{asset('/setLocal-en')}}">EN</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link" data-toggle="modal" data-target="#searchModal">
                                                <i class="fas fa-search"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>