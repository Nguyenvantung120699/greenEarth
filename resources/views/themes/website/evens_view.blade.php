@extends('themes.website.layout.layout')
@section('content')
<div class="slider-area ">
      <!-- Mobile Menu -->
      <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset("img/hero/contact_hero.jpg")}}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Evens</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- slider Area End-->
   <!--================Blog Area =================-->
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
                        <span>EVENS</span>
                        <h2>Title</h2><br>
                        <p><b>Time start :</b> start - stop</p>
                        <p><b>Event location : </b>My Dinh - Ha Noi - Viet Nam</p>
                     </div>
                     <div class="support-caption">
                        <p>{{trans('home.introduceW')}}</p>

                        <ul class="blog-info-link">
                           <li><a href="#"><i class="fa fa-user"></i>+ 800 People Join</a></li>
                           <li><a href="#"><i class="fas fa-map-marker-alt"></i> Ha Noi - Viet Nam</a></li>
                        </ul>
                        <div class=" blog_right_sidebar" >
                           <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Sponsors</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">Green Earth</a>
                                </li>
                                <li>
                                    <a href="#">Lotte</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">Nissan</a>
                                </li>
                                <li>
                                    <a href="#">Honda</a>
                                </li>
                                <li>
                                    <a href="#">VinGroup</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="comment-form">
               <h2>Join Evens</h2>
               <form class="form-contact comment_form" action="#" id="comment" method="post">
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
                        type="submit">Join</button>
                  </form>
               </div>
         </div>
        <!-- Our Services End -->
        <!-- Video Start Arera -->
        <div class="favourite-place place-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Other Events</span>
                            <h2>Upcoming</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="assets/img/service/services1.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">The Dark Forest Adventure</a></h3>
                                    <p class="dolor">$1870 <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>3 Days</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="assets/img/service/services2.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">The Dark Forest Adventure</a></h3>
                                    <p class="dolor">$1870 <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>3 Days</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="assets/img/service/services3.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">The Dark Forest Adventure</a></h3>
                                    <p class="dolor">$1870 <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>3 Days</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="assets/img/service/services4.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">The Dark Forest Adventure</a></h3>
                                    <p class="dolor">$1870 <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>3 Days</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="assets/img/service/services5.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">The Dark Forest Adventure</a></h3>
                                    <p class="dolor">$1870 <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>3 Days</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="assets/img/service/services6.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                    <h3><a href="#">The Dark Forest Adventure</a></h3>
                                    <p class="dolor">$1870 <span>/ Per Person</span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>3 Days</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start End -->
        <!-- Testimonial Start -->
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
      </div>
   </div>
@endsection