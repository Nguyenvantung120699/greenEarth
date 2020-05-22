@extends('themes.website.layout.layout')
@section('title',$title)
@section('content')

<div class="slider-area ">
      <!-- Mobile Menu -->
      <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset("img/hero/contact_hero.jpg")}}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>{{trans('event.event')}}</h2>
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
                            <span>{{trans('event.title1')}}</span>
                            <h2>{{trans('event.title2')}}</h2>
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
                                    <p> |   {{trans('event.event')}}</p>
                                    <h3><a href="{{url("sukien",["event_slug"=>$e->event_slug])}}">{{$e->event_name}}</a></h3>
                                    <a href="{{url("sukien",["event_slug"=>$e->event_slug])}}" class="more-btn">{{trans('event.readmore')}}</a>
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