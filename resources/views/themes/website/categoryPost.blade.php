@extends('themes.website.layout.layout')



@section('content')
<div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center border-bottom">
                        <div class="news-title">
                            <p>{{$category->category_name}}</p>
                        </div>
                    </div>
                </div>

                <!-- Hero Add -->
                <div class="col-12 col-lg-4">
                    <div class="section-heading" style="margin-bottom:0;">
                        <h6>Mới nhất & dành cho bạn đọc</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <!-- Single Featured Post -->
                        @forelse($postc as $p)
                        
                        <div class="single-blog-post featured-post mb-30 border-bottom">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset("img/bg-img/25.jpg")}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="{{url("/baiviet/{$p->id}")}}" class="post-catagory">{{$p->title}}</a>
                                <a href="#" class="post-title" style="padding-bottom:2%;">
                                    <h3>{{$p->short_desc}}</h3>
                                </a>
                                <div class="post-meta">
                                    <!-- Post Like & Post Comment -->

                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="{{asset("img/core-img/like.png")}}" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="{{asset("img/core-img/chat.png")}}" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <P>Không Có Bài Viết Nào</P>
                        @endforelse 
                    </div>
                    {!! $postc->links() !!}
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">
                            @foreach($postn as $pn)
                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset("img/bg-img/19.jpg")}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">{{$pn->title}}</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>{{$pn->short_desc}}</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
@endsection