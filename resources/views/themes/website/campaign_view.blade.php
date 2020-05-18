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
   <!-- slider Area End-->
   <!--================Blog Area =================-->
   <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar blog_right_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{$campaigns->image}}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>Start : {{$campaigns->start_date}}</h3>
                                    <p>end : {{$campaigns->end_date}}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>{{$campaigns->campaign_name}}</h2>
                                </a>
                                <p>{{$campaigns->content}}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i>{{$tdonate}} people Donate</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i>Need to Achieve 5000,000 USD</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i>Received {{$total_money}} USD</a></li>
                                </ul>
                            </div>
                        </article>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Other Campaigns</h3>
                            @foreach($campaignt as $ct)
                            <div class="media post_item">
                                <img style="width:20%" src="{{$ct->image}}" alt="post">
                                <div class="media-body">
                                    <a href="{{url("chiendich",["campaign_slug"=>$ct->campaign_slug])}}">
                                        <h3>{{$ct->campaign_name}}</h3>
                                    </a>
                                    <p><b>start :</b> {{$ct->start_date}}</p>
                                </div>
                            </div>
                            @endforeach
                        </aside>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Introduce</h4>
                            <ul style="color:black;">
                                    <li><p><i class="fa fa-user"></i> {{$tdonate}} people Donate</li></p>
                                    <li><p><i class="fa fa-comments"></i> Objectives achieved 5000,000 USD</li></p>
                                    <li><p><i class="fa fa-comments"></i> Received {{$total_money}} USD</li></p>
                                </ul>
                        </aside>

                        <aside class="single_sidebar_widget search_widget">
                                <div class="text-center">
                                    <h3>Donate Now</h3>
                                </div>
                                <form class="form-group contact_form" action="{{url("donate-now/{$campaigns->id}")}}" method="post" id="donate-now" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="name" id="name" type="text" placeholder="{{__("Enter your name")}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="email" id="email" type="email" placeholder="{{__("Enter email address")}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="address" id="address" type="text" placeholder="{{__("Enter Address")}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="telephone" id="telephone" type="text"  placeholder="{{__("Enter Telephone")}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="donate" id="money" type="number" placeholder="{{__("The amount you donate")}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" name="payment_method">
                                                <option selected  id="1" value="bank-transfer">Bank transfer</option>
                                                <option selected id="2" value="post-office">Post office</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" minlength="100" name="message" id="message" cols="30" rows="9" placeholder="{{__("Message")}}"></textarea>
                                        </div>
                                    </div>
                                </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" data-toggle="modal" data-target="#exampleModalCenter"
                                    type="submit">Donate</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Organizer</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">{{$campaigns->organizational_units}}</a>
                                </li>
                            </ul>
                        </aside>

                        <div><h5>List People Donate</h5>
                        <div>
                            <ul class="list-group list-group-flush" style="background-color: #eee;width: 100%;height: 200px;overflow: scroll;">
                                @foreach($donatep as $d)
                                <li class="list-group-item"><p>{{$d->id}}. {{$d->name}} - ${{$d->getDonate()}}</p></li>
                                @endforeach
                            </ul>
                        </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection