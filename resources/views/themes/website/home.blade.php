@extends('themes.website.layout.layout')



@section('content')
    <div class="hero-area text-center text-info" style="padding:20px">
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">

                        <!-- Single Featured Post -->
                        <div class="col-12 col-lg-12 border-bottom">
                        <h4 class="border-bottom"><span>Bài viết nổi bật nhất</span></h4>
                            @foreach($posts as $ps)
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/16.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{url("bai-viet/{$ps->id}")}}" class="post-catagory">{{$ps->title}}</a>
                                    <h3 href="#" class="post-title">
                                        <span>{{$ps->short_desc}}</span>
                                        <a class="rmore" href="{{url("bai-viet/{$ps->id}")}}">Xem chi tiết <i class="fa fa-arrow-right"></i></a>
                                    </h3>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 border-bottom">
                    <!-- Single Featured Post -->
                    <h4 class="border-bottom"><span>Bài được đọc nhiều nhất</span></h4>
                   @foreach($post as $p)
                   <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="{{url("bai-viet/{$ps->id}")}}" class="post-catagory">{{$p->title}}</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>{{$p->short_desc}}</h6>
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Popular News</h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        @foreach($like as $l)
                        <div class="col-12 col-md-6">   
                            <div class="single-blog-post style-3 border">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/12.jpg" alt=""></a>
                                </div>
                                <div class="post-data" style="padding:2%;">
                                   <div class="text-post" style="height:180px;padding:2%;">
                                    <a href="#" class="post-catagory">{{$l->title}}</a>
                                        <p href="#" class="post-title">
                                        <h6>{{$l->short_desc}}</h6>
                                        </p>
                                   </div>
                                    <div class="post-meta d-flex align-items-center" style="padding:2%;">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Celebrity activities</h6>
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
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->
    <!-- ##### Editorial Post Area Start ##### -->
    <div class="editors-pick-post-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="section-heading">
                        <h6>Mới nhất & dành cho bạn đọc</h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        @foreach($post as $p)
                        <div class="col-12 col-lg-12" style="padding-bottom:3%;">
                            <div class="b-grid">
                                <div class="b-grid__img col-md-4" style="float: left"><a href="https://baotainguyenmoitruong.vn/thoi-tiet-26-4-bac-bo-tiep-tuc-mua-ret-co-noi-duoi-15-do-303546.html"><img src="https://btnmt.onecmscdn.com/thumbs/562x331/2020/04/26/2.jpg" alt="Thời tiết 26/4: Bắc Bộ tiếp tục mưa r&#233;t, c&#243; nơi dưới 15 độ" title="Thời tiết 26/4: Bắc Bộ tiếp tục mưa r&#233;t, c&#243; nơi dưới 15 độ" /></a></div>
                                <div class="b-grid__content col-md-8" style="float: left">
                                    <div class="b-grid__row"><h3 class="b-grid__title"><a class="post-catagory" href="https://baotainguyenmoitruong.vn/thoi-tiet-26-4-bac-bo-tiep-tuc-mua-ret-co-noi-duoi-15-do-303546.html">{{$p->title}}</a></h3></div>
                                    <div class="b-grid__row b-grid__desc">
                                        {{$p->short_desc}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- World News -->
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="section-heading">
                        <h6>Đọc nhiều</h6>
                    </div>

                    <!-- Single Post -->
                    @foreach($post as $pr)
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="{{url("bai-viet/{$pr->id}")}}" class="post-catagory">{{$pr->title}}</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <p>{{$pr->short_desc}}</p>
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @endsection