@extends('themes.website.layout.layout')
@section('content')
    <!-- ##### Featured Post Area Start ##### -->
    <div class="hero-area"> </div>
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post border-bottom">
                            <div class="section-heading" >
                                <h6>{{$posts->Category->category_name}}</h6>
                            </div>
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset("img/bg-img/25.jpg")}}" alt=""></a>
                            </div>
                            <div class="post-data">
                              <span><h4>{{$posts->title}}</h4></span>


                                <div class="post-meta">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {!! $posts->content!!}
                                        </div>
                                    </div>
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                        <!-- Tags -->
{{--                                        <div class="newspaper-tags d-flex">--}}
{{--                                            <span>Tags:</span>--}}
{{--                                            <ul class="d-flex">--}}
{{--                                                <li><a href="#">finacial,</a></li>--}}
{{--                                                <li><a href="#">politics,</a></li>--}}
{{--                                                <li><a href="#">stock market</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}

                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center post-like--comments">
                                            <a href="#" class="post-like"><img src="{{asset("img/core-img/like.png")}}" alt=""> </a><span> {{$posts->count_like}}</span>
                                            <a href="#" class="post-comment"><img src="{{asset("img/core-img/chat.png")}}" alt=""> </a><span>10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">

                            <h5 class="title">Bình luận ({{$comments->count()}})</h5>


                            <div class="clearfix"></div>
                            <ol id="comments" class="margin-top-20">
                                @foreach($comments  as $comment)
                                    @if(!$comment->hasParent())
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{asset("img/bg-img/31.jpg")}}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                           <h6>{{$comment->user_name}}</h6>
                                            <p>{!! $comment->content !!} </p>
                                            <span style="float:left;">{{$comment->created_at}}</span>
                                            <a href="#" style="float:right;"  class="toggle-comment" data-id="{{$comment->id}}">Trả lời</a>
                                        </div>
                                    </div>

                                    <ol class="children">
                                        @if($comment->hasChildren())
{{--                                            <pre>{{var_dump($comment->children )}}</pre>--}}
                                        @foreach($comment->children as $child)
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="{{asset("img/bg-img/31.jpg")}}" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                   <h6>{{$child->user_name}}</h6>
                                                    <p>{!! $child->content !!} </p>
                                                    <span>{{$child->created_at}}</span>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        @endif

                                        <li class="reply-comment single_comment_area d-none" data-id="{{$comment->id}}">
                                            <form class="contact-form-area" action="{{ url("commentPost/{$posts->id}") }}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <input type="text" class="form-control"  name="user_name" placeholder="{{__("Name *")}}">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <input type="text" class="form-control" name="email" placeholder="{{__("Email *")}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" rows="2" placeholder="{{__("Comment ")}}"></textarea>
                                                </div>
                                                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                                <button type="submit" class="btn newspaper-btn">Submit</button>
                                            </form>
                                        </li>
                                    </ol>
                                </li>
                                        @endif
                                @endforeach
                            </ol>

                        </div>

                        <div class="post-a-comment-area section-padding-80-0">
                            <h4>Leave a comment</h4>

                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="{{url("commentPost",["post_id"=>$posts->id])}}" id="comment" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" name="user_name" class="form-control" id="name" placeholder="{{__("Name *")}}">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="{{__("Email *")}}">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="{{__("Message")}}"></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class="btn newspaper-btn mt-30 w-100" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="aside col-12 col-md-6 col-lg-4" >
                    <div class="section-heading" >
                        <h6>Bài được đọc nhiều nhất</h6>
                    </div>
                    @foreach($post as $p)
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="{{url("baiviet",["cat_path"=>$p->Category->path,"slug"=>$p->slug])}}" class="post-catagory">{{$p->Category->category_name}}</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>{{$p->title}}</h6>
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="section-heading"></div>
{{--                    <div class="col-12 col-lg-4">--}}
                        <div class="section-heading">
                            <h6>Tin tức phổ biến</h6>
                        </div>
                        <!-- Popular News Widget -->
                        <div class="popular-news-widget mb-30">
                            <h3>4 Most Popular News</h3>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget">
                            <h4>Join a group</h4>
                            <p>You can join us or support us to join hands for a green earth</p>
                            <form action="#" method="post">
                                <input type="text" name="name" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <input type="text" name="telephone" placeholder="Telephone">
                                <input type="text" name="address" placeholder="Address">
                                <button type="submit" class="btn w-100">Join</button>
                            </form>
                        </div>
{{--                    </div>--}}

                </div>
{{--                <div class="col-12 col-lg-8">--}}
{{--                    <div class="blog-sidebar-area">--}}
{{--                        <div class="section-heading" style="margin-top: 40px">--}}
{{--                            <h6>Bài viết cùng chuyên mục</h6>--}}
{{--                        </div>--}}

{{--                            <!-- Single Post -->--}}
{{--                            <div class="col-12 col-lg-12" style="padding-bottom:3%;">--}}
{{--                                <div class="b-grid">--}}
{{--                                    <div class="b-grid__img col-md-4" style="float: left"><a href="https://baotainguyenmoitruong.vn/thoi-tiet-26-4-bac-bo-tiep-tuc-mua-ret-co-noi-duoi-15-do-303546.html"><img src="https://btnmt.onecmscdn.com/thumbs/562x331/2020/04/26/2.jpg" alt="Thời tiết 26/4: Bắc Bộ tiếp tục mưa r&#233;t, c&#243; nơi dưới 15 độ" title="Thời tiết 26/4: Bắc Bộ tiếp tục mưa r&#233;t, c&#243; nơi dưới 15 độ" /></a></div>--}}
{{--                                    <div class="b-grid__content col-md-8" style="float: left">--}}
{{--        --}}{{--                                <div class="b-grid__row"><h3 class="b-grid__title"><a class="post-catagory" href="https://baotainguyenmoitruong.vn/thoi-tiet-26-4-bac-bo-tiep-tuc-mua-ret-co-noi-duoi-15-do-303546.html">{{$p->title}}</a></h3></div>--}}
{{--                                        <div class="b-grid__row b-grid__desc">--}}
{{--        --}}{{--                                    {{$p->short_desc}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-lg-12" style="padding-bottom:3%;">--}}
{{--                                <div class="b-grid">--}}
{{--                                    <div class="b-grid__img col-md-4" style="float: left"><a href="https://baotainguyenmoitruong.vn/thoi-tiet-26-4-bac-bo-tiep-tuc-mua-ret-co-noi-duoi-15-do-303546.html"><img src="https://btnmt.onecmscdn.com/thumbs/562x331/2020/04/26/2.jpg" alt="Thời tiết 26/4: Bắc Bộ tiếp tục mưa r&#233;t, c&#243; nơi dưới 15 độ" title="Thời tiết 26/4: Bắc Bộ tiếp tục mưa r&#233;t, c&#243; nơi dưới 15 độ" /></a></div>--}}
{{--                                    <div class="b-grid__content col-md-8" style="float: left">--}}
{{--        --}}{{--                                <div class="b-grid__row"><h3 class="b-grid__title"><a class="post-catagory" href="https://baotainguyenmoitruong.vn/thoi-tiet-26-4-bac-bo-tiep-tuc-mua-ret-co-noi-duoi-15-do-303546.html">{{$p->title}}</a></h3></div>--}}
{{--                                        <div class="b-grid__row b-grid__desc">--}}
{{--        --}}{{--                                    {{$p->short_desc}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-lg-8" style="padding-bottom:3%;">--}}
{{--                                <div class="b-grid">--}}
{{--                                    <div class="b-grid__img col-md-4" style="float: left"><a href="https://baotainguyenmoitruong.vn/thoi-tiet-26-4-bac-bo-tiep-tuc-mua-ret-co-noi-duoi-15-do-303546.html"><img src="https://btnmt.onecmscdn.com/thumbs/562x331/2020/04/26/2.jpg" alt="Thời tiết 26/4: Bắc Bộ tiếp tục mưa r&#233;t, c&#243; nơi dưới 15 độ" title="Thời tiết 26/4: Bắc Bộ tiếp tục mưa r&#233;t, c&#243; nơi dưới 15 độ" /></a></div>--}}
{{--                                    <div class="b-grid__content col-md-8" style="float: left">--}}
{{--        --}}{{--                                <div class="b-grid__row"><h3 class="b-grid__title"><a class="post-catagory" href="https://baotainguyenmoitruong.vn/thoi-tiet-26-4-bac-bo-tiep-tuc-mua-ret-co-noi-duoi-15-do-303546.html">{{$p->title}}</a></h3></div>--}}
{{--                                        <div class="b-grid__row b-grid__desc">--}}
{{--        --}}{{--                                    {{$p->short_desc}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>

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