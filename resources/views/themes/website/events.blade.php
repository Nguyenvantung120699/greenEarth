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
   <div class="home-blog-area section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Green Earth Event</span>
                            <h2>Our Events</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                @foreach($event as $e)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{$e->image}}" alt="">
                                </div>
                                <div class="blog-cap">
                                    <p> |   Event</p>
                                    <h3><a href="single-blog.html">{{$e->event_name}}</a></h3>
                                    <a href="{{url("viewevents/{$e->id}")}}" class="more-btn">Read more »</a>
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

    @endsection