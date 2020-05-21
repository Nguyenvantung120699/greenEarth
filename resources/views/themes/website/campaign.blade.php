@extends('themes.website.layout.layout')
@section('content')

<div class="slider-area ">
      <!-- Mobile Menu -->
      <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset("img/hero/contact_hero.jpg")}}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Campaign</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
<section class="blog_area section-padding">
   <div class="container">
      <div class="row">
      @foreach($campaign as $c)
            <div class="col-lg-4 mb-5 mb-lg-0">
               <div class="blog_left_sidebar">
                  <article class="blog_item">
                        <div class="blog_item_img">
                           <img class="card-img rounded-0" src="{{$c->image}}" alt="">
                           <a href="#" class="blog_item_date">
                              <h3>15</h3>
                              <p>Jan</p>
                           </a>
                        </div>

                        <div class="blog_details">
                           <a class="d-inline-block" href="{{url("chiendich",["campaign_slug"=>$c->campaign_slug])}}">
                              <h2>{{$c->campaign_name}}</h2>
                           </a>
                           <p>{{$c->organizational_units}}</p>
                           <ul class="blog-info-link">
                              <li><a href="#"><i class="far fa-clock"></i>start : {{$c->start_date}}</a></li>
                              <li><a href="#"><i class="far fa-clock"></i>end : {{$c->end_date}}</a></li>
                           </ul>
                        </div>
                  </article>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section>
@endsection