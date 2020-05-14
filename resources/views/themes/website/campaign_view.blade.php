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
                                <img class="card-img rounded-0" src="{{asset("img/blog/single_blog_1.png")}}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Other Campaigns</h3>
                            <div class="media post_item">
                                <img src="{{asset("img/post/post_1.png")}}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset("img/post/post_1.png")}}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset("img/post/post_1.png")}}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>  
                        </aside>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Introduce</h4>
                            
                        </aside>

                        <aside class="single_sidebar_widget search_widget">
                                <div class="text-center">
                                    <h3>Donate Now</h3>
                                </div>
                                <form class="form-group contact_form" action="#" method="post" id="donate-now" novalidate="novalidate">
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
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
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
    </section>
@endsection