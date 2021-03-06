@extends('themes.website.layout.layout')
@section("title",$title)
@section('content')

<div class="slider-area ">
      <!-- Mobile Menu -->
      <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset("img/hero/contact_hero.jpg")}}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>{{$posts->Category->category_name}}</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- slider Area End-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset("$posts->image")}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$posts->title}}</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> {{$posts->created_at}}</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> {{$posts->Comments->count()}} Comments</a></li>
                     </ul>
                     <div class="quote-wrapper">
                        <div class="quotes">
                        {{$posts->short_desc}}
                        </div>
                     </div>
                     <p>
                     {!! $posts->content!!}
                     </p>
                  </div>
               </div>
               <div class="comments-area">
                  <h4> Comments  ({{$comments->count()}})</h4>
                   <ol id="comments">
                       <li>
                       @foreach($comments  as $comment)
                           @if(!$comment->hasParent())
                           <div class="comment-list">
                               <div class="single-comment justify-content-between d-flex">
                                   <div class="user justify-content-between d-flex">
                                       <div class="desc">
                                           <p class="comment">
                                               {!! $comment->content !!}
                                           </p>
                                           <div class="d-flex justify-content-between">
                                               <div class="d-flex justify-content-between">
                                                   <div class="d-flex align-items-center">
                                                       <p>
                                                           <strong><i class="fa fa-user"></i>     {{$comment->user_name}}</strong>
                                                           {{$comment->created_at}}
                                                       </p>

                                                   </div>
                                               </div>
                                               <div class="reply-btn">
                                                   <a href="#" class="btn-reply text-uppercase toggle-comment"  data-id="{{$comment->id}}">reply</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <ol class="children">
                               @if($comment->hasChildren())
                               @foreach($comment->children as $cm)
                               <li>
                                   <div class="comment-list">
                                       <div class="single-comment justify-content-between d-flex">
                                           <div class="user justify-content-between d-flex">

                                               <div class="desc">
                                                   <p class="comment">
                                                       {!! $cm->content !!}
                                                   </p>
                                                   <div class="d-flex justify-content-between">
                                                       <div class="d-flex align-items-center">
                                                           <p>
                                                             <strong><i class="fa fa-user"></i>     {{$cm->user_name}}</strong>
                                                            {{$cm->created_at}}
                                                           </p>

                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>

                               </li>
                               @endforeach
                               @endif
                                   <li class="reply-comment single_comment d-none" data-id="{{$comment->id}}">
                                       <form class="contact-form-area" action="{{ url("commentPost/{$posts->id}") }}" method="post">
                                           @csrf
                                           <div class="row">
                                               <div class="form-group col-sm-6">
                                                   <input type="text" class="form-control"  name="user_name" placeholder="{{__("Name *")}}" required>
                                               </div>
                                               <div class="form-group col-sm-6">
                                                   <input type="text" class="form-control" name="email" placeholder="{{__("Email *")}}" required>
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               <textarea name="message" minlength="2" class="form-control" rows="2" placeholder="{{__("Comment ")}}" required></textarea>
                                           </div>
                                           <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                           <button type="submit" class="button button-contactForm btn_1 boxed-btn">Submit</button>
                                       </form>
                                   </li>
                           </ol>

                       @endif
                       @endforeach
                       </li>
                   </ol>

               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="{{url("commentPost",["post_id"=>$posts->id])}}" id="comment" method="post">
                      @csrf
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" minlength="2" name="message" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment" required></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="user_name" id="name" type="text" placeholder="Name" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Comment</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        @foreach(\App\Category::all() as $c)
                        <li>
                           <a href="{{url("/chuyenmuc",["path"=>$c->path])}}" class="d-flex">
                              <p>{{$c->category_name}}</p>
                           </a>
                        </li>
                        @endforeach
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     @foreach($post as $p)
                     <div class="media post_item">
                        <img style="width:35%;height:auto" src="{{asset("$p->image")}}" alt="post">
                        <div class="media-body">
                           <a href="{{url("baiviet",["cat_path"=>$p->Category->path,"slug"=>$p->slug])}}">
                              <h3>{{$p->title}}</h3>
                           </a>
                           <p>{{$p->created_at}}</p>
                        </div>
                     </div>
                     @endforeach
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

    @endsection