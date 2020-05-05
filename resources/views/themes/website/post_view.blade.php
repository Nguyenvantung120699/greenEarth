@extends('themes.website.layout.layout')
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
                     <img class="img-fluid" src="{{asset("img/blog/single_blog_1.png")}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$posts->title}}</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> {{$posts->created_at}}</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
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
                  <h4>05 Comments</h4>
                  @foreach($comments  as $comment)
                    @if(!$comment->hasParent())
                    <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="{{asset("img/comment/comment_1.png")}}" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                {!! $comment->content !!}
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">{{$comment->user_name}}</a>
                                    </h5>
                                    <p class="date">{{$comment->created_at}}</p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
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
                        <img src="{{asset("img/post/post_1.png")}}" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>{{$p->title}}</h3>
                           </a>
                           <p>{{$p->created_at}}</p>
                        </div>
                     </div>
                     @endforeach
                  </aside>
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                        <h3 class="text-center">Donate</h3>
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Name'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
                           </div>
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Email'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                           </div>
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Telephone'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telephone'">
                           </div>
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Address'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'">
                           </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Donate</button>
                     </form>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

    <!-- ##### Featured Post Area End ##### -->
    <script>
        function submitComment() {
            $(document).ready(function () {
                 $("#comment").submit((e)=>{
                        e.preventDefault();
                        $.ajax({
                            method : "post",
                            url : $("#comment").attr("action"),
                            data : $("#comment").serialize(),
                            dataType : "json",
                            success : function (response) {
                                console.log(response)
                            }
                        });
                 });
            });
        }


        function colorlike() {
        document.getElementById("like").style.color = "#FE2E2E";
        }

        function colorshare() {
        document.getElementById("share").style.color = "#FE2E2E";
        }
    </script>
    @endsection