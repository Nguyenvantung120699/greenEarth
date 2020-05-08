@extends("themes.website.layout.layout")

@section("content")
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset("img/hero/about.jpg")}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Support Company Start-->
        <div class="support-company-area servic-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img mb-50">
                            <img src="https://i.pinimg.com/736x/d9/3c/21/d93c21993d3ea252149248df7b9679a8.jpg" alt="">
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
                                <h2>Who are we?<br>What Mission Do We Do?</h2>
                            </div>
                            <div class="support-caption">
                                <p>"Green Earth is a non-profit organization that always contributes to organizing campaigns to improve the environment and clean the earth.
The website provides complete information about the organization as well as the campaigns and events created by this organization. People come in to see the information and can participate in material support as well as participate in those campaign events directly.
In addition, there are introduced celebrities or organizations and companies that support green work.
There are articles assessing the level and warning about the environment and the problems of the earth facing "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-area testimonial-padding" data-background="https://moitruong.tranthanhtra.net/wp-content/uploads/2018/06/tiet-kiem-nang-luong.jpg">
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
    </main>

@endsection