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
                                <h1>Green Earth <span>Who Is?</span> </h1>
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

    <div class="our-services servic-padding">
        <div class="container">
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5>8000+ People<br>Join</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="services-cap">
                            <h5>We Always Need<br>Donate</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-experience"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Organize Activities To Be Necessary<br>Necessary</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-good"></span>
                        </div>
                        <div class="services-cap">
                            <h5>Join Hands Together For A<br>Green Earth</h5>
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
                        <span>activities</span>
                        <h2>Our typical</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($post as $p)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-place mb-30">
                        <div class="place-img">
                            <img src="{{$p->image}}" alt="">
                        </div>
                        <div class="place-cap">
                            <div class="place-cap-top">
                                <h3><a href="{{url("baiviet",["cat_path"=>$p->Category->path,"slug"=>$p->slug])}}">{{$p->Category->category_name}}</a></h3>
                                <p class="dolor">{{$p->title}}</p>
                            </div>
                            <div class="place-cap-bottom">
                                <ul>
                                    <li class="text-black"><a href="{{url("baiviet",["cat_path"=>$p->Category->path,"slug"=>$p->slug])}}"><p><i class="fa fa-eye"></i>See Activity</p></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

        <div class="video-area video-bg pt-200 pb-200"  data-background="{{asset("img/service/video-bg.jpg")}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-caption text-center">
                            <div class="video-icon">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=vKiSdMxU1sg" tabindex="0"><i class="fas fa-play"></i></a>
                            </div>
                            <p class="pera1">"The environment is the place where we meet, the place that benefits everyone, is something we all share."</p>
                            <p class="pera2">Let us show you a beautiful green globe</p>
                            <p class="pera3">Green Earth Sustainable House</p>
                        </div>
                    </div>
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
                                <span>Apply our company</span>
                                <h2>We are performing the operation <br>Company Need Supporters</h2>
                            </div>
                            <div class="support-caption">
                                <p>LWe implement environmental protection activities everywhere across the globe. and parallel with that is the need for human resources to be able to deploy and maintain activities. Interested people please register with us for the opportunity to join the organization</p>
                                <div class="select-suport-items">
                                    <label class="single-items">I really love this job
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="single-items">I want to join the membership registration
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="single-items">Eiusmod tempor incididunt
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="single-items">Ad minim veniam, quis nostrud.
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <a href="{{url("/work")}}" class="btn border-btn">Recruitment now</a>
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
                                        <p>"The rest of the natural world can continue to live without us, but we cannot exist without them."</p>
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
                                        <p>"There is an undeniable fact that a small group of conscious and dedicated citizens can change the whole world."</p>
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
                            <span>The Activities Of</span>
                            <h2>Famous People</h2>
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
                                    <a href="{{url("baiviet",["cat_path"=>$p->Category->path,"slug"=>$p->slug])}}" class="more-btn">Read more »</a>
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
    @endsection