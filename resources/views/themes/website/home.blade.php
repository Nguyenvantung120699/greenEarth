@extends('themes.website.layout.layout')
@section("title","Trang chủ")
@section('content')

<main>
    <div class="slider-area ">
            <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="{{asset("img/hero/h1_hero.jpg")}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <h1>Green Earth <span>{{trans('home.name')}}</span> </h1>
                                <p>{{trans('home.banner_content')}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- form -->
                            <form method="get" action="{{asset('search')}}" class="search-box">
                                <div class="input-form mb-30">
                                    <input name="key" type="text" placeholder="{{trans('home.search_1')}}" required>
                                </div>
                                <div class="search-form mb-30">
                                   <button type="submit" class="btn btn-warning">{{trans('home.search_2')}}</button>
                                </div>	
                            </form>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-services servic-padding">
        <div class="container">
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5>{{trans('home.i1')}}<br>{{trans('home.i2')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="services-cap">
                            <h5>{{trans('home.i3')}}<br>{{trans('home.i4')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-experience"></span>
                        </div>
                        <div class="services-cap">
                            <h5>{{trans('home.i5')}}<br>{{trans('home.i6')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-good"></span>
                        </div>
                        <div class="services-cap">
                            <h5>{{trans('home.i7')}}<br>{{trans('home.i8')}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="favourite-place place-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>{{trans('home.activities')}}</span>
                        <h2>{{trans('home.Our')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($post as $p)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-place mb-30">
                        <div class="place-img">
                            <a href="{{url("baiviet",["cat_path"=>$p->Category->path,"slug"=>$p->slug])}}"><img src="{{$p->image}}" alt=""></a>
                        </div>
                        <div class="place-cap">
                            <div class="place-cap-top">
                                <h3><a href="{{url("/chuyenmuc",["path"=>$p->Category->path])}}">{{$p->Category->category_name}}</a></h3>
                                <a href="{{url("baiviet",["cat_path"=>$p->Category->path,"slug"=>$p->slug])}}"><p class="dolor">{{$p->title}}</p></a>
                            </div>
                            <div class="place-cap-bottom">
                                <ul>
                                    <li class="text-black"><a href="{{url("baiviet",["cat_path"=>$p->Category->path,"slug"=>$p->slug])}}"><p><i class="fa fa-eye"></i>{{trans('home.see')}}</p></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

        <div class="home-blog-area section-padding2" style="padding-bottom:2%">
            <div class="container ">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Our Recent news</span>
                            <h2>Tourist Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                @foreach($campaigns as $c)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img" style="height:365px" data-background="{{$c->image}}">
                                    <div class="col-md-12" style="padding-top:20%">
                                    <h1 class="text-center text-white" id="demo">Sự Kiện Sắp Diễn Ra</h1>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="blog-date text-center" style="border-radius:10%;background-color:green">
                                                    <span id="dongho1"></span>
                                                    <p>Day</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="blog-date text-center" style="border-radius:10%;background-color:green">
                                                    <span id="dongho2"></span>
                                                    <p>Hours</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="blog-date text-center" style="border-radius:10%;background-color:green">
                                                    <span id="dongho3" >24</span>
                                                    <p>Min</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="blog-date text-center" style="border-radius:10%;background-color:green">
                                                    <span id="dongho4">24</span>
                                                    <p>Sec</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p> |   Campaign</p>
                                    <h3><a href="{{url("chiendich",["campaign_slug"=>$c->campaign_slug])}}">{{$c->campaign_name}}</a></h3>
                                    <a href="{{url("chiendich",["campaign_slug"=>$c->campaign_slug])}}" class="more-btn">Read more »</a>
                                </div>
                            </div>
                            <div class="blog-date text-center">
                                <span id="date"></span>
                                <p>Day</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($events as $e)
                    <div class="col-xl-6 col-lg-6 col-md-6" style="height:365px">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{$e->image}}" alt="">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" class="blog_item_date" style="background-color:green">
                                                <h3>Start</h3>
                                                <p>{{$e->start_date}}</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="blog_item_date" style="background-color:red">
                                                <h3>finish</h3>
                                                <p>{{$e->end_date}}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url("sukien",["event_slug"=>$e->event_slug])}}")}}">
                                    <h2>{{$e->event_name}}</h2>
                                </a>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> 100 people donated</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img mb-50">
                            <img src="{{asset("img/service/support-img.jpg")}}" alt="">
                            <div class="support-img-cap">
                                <span>Since 1992</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>Green Earth</span>
                                <h2>{{trans('home.staff')}}<br>{{trans('home.carry')}}</h2>
                            </div>
                            <div class="support-caption">
                                <p>{{trans('home.introduceW')}}</p>
                                <div class="select-suport-items border-top">
                                <aside class="single_sidebar_widget search_widget" style="padding:5%;">
                                    <h2 class="text-center">{{trans('home.title_form')}}</h2>
                                    <form class="form-contact contact_form" action="{{url("introduction")}}" method="post" id="introduction" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control valid" name="name" id="name" type="text"   placeholder="{{trans('home.name_form')}}" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control cc-name @if($errors->has("email")) is-invalid @endif" name="email" value="{{old("email")}}" type="email" placeholder="{{trans('home.email_form')}}" required>
                                                    @if($errors->has("email"))
                                                        <p style="color:red">{{$errors->first("email")}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <select class="form-control" name="gender">
                                                        <option selected value="male">{{trans('home.male_form')}}</option>
                                                        <option selected value="female" >{{trans('home.female_form')}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <input class="form-control valid" name="telephone" placeholder="{{trans('home.telephone_form')}}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="address" id="address" type="text"  placeholder="{{trans('home.address_form')}}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" maxlength="1000" name="message" id="message" rows="4" type="text"  placeholder="{{trans('home.message_form')}}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                            type="submit">{{trans('home.button_form')}}</button>
                                    </form>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-area testimonial-padding" data-background="{{asset("img/testmonial/testimonial_bg.jpg")}}">
            <div class="container ">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                    <div class="services-ion">
                                        <h1  style="font-size:500%" class="flaticon-tour"></h1>
                                    </div>
                                        <p>"{{trans('home.remember1')}}"</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-text">
                                            <span>SYLVIA A.EARLE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap text-black">
                                    <div class="services-ion">
                                        <h1  style="font-size:500%" class="flaticon-tour"></h1>
                                    </div>
                                        <p>"{{trans('home.remember2')}}"</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-text">
                                            <span>Jessya Inn</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Testimonial End -->
        <div class="home-blog-area section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>{{trans('home.the_activitices')}}</span>
                            <h2>{{trans('home.people')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                @foreach($postt as $pt)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{$pt->image}}" alt="">
                                </div>
                                <div class="blog-cap">
                                    <p> |   {{$pt->Category->category_name}}</p>
                                    <h3><a href="single-blog.html">{{$pt->title}}</a></h3>
                                    <a href="{{url("baiviet",["cat_path"=>$p->Category->path,"slug"=>$p->slug])}}" class="more-btn">{{trans('home.remore')}}</a>
                                </div>
                            </div>
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    var countDownDate = new Date("July 13, 2020 21:22:25").getTime();

        var x = setInterval(function() {

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if(days<10){
            document.getElementById("dongho1").innerHTML = "0"+days;
        }else{
            document.getElementById("dongho1").innerHTML = days;
        }
        if(hours<10){
            document.getElementById("dongho2").innerHTML = "0"+hours;
        }else{
            document.getElementById("dongho2").innerHTML = hours;
        }
        if(minutes<10){
            document.getElementById("dongho3").innerHTML = "0"+minutes;
        }else{
            document.getElementById("dongho3").innerHTML = minutes;
        }
        if(seconds<10){
            document.getElementById("dongho4").innerHTML = "0"+seconds;
        }else{
            document.getElementById("dongho4").innerHTML = seconds;
        }
        document.getElementById("date").innerHTML = days;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Thời gian sự kiện đã kết thúc";
            document.getElementById("dongho1").innerHTML = "00";
            document.getElementById("dongho2").innerHTML = "00";
            document.getElementById("dongho3").innerHTML = "00";
            document.getElementById("dongho4").innerHTML = "00";
        }
        }, 1000);
</script>
    @endsection