@extends('themes.website.layout.layout')
@section('content')
    <div class="hero-area"> </div>
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        @foreach($posts as $post)

                        <div class="single-blog-post featured-post mb-30">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset("img/bg-img/25.jpg")}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">{{$categories->category_name}}</a>

                                    <h3>{{$post->title}}</h3>

                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="space20">{{$post->short_desc}}</p>
                                        <a href="{{url("baiviet",["cat_path"=>$post->Category->path,"slug"=>$post->slug])}}" class="post-more">Đọc tiếp <em>→</em></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                    {!! $posts->links() !!}
                </div>

                <div class="aside col-12 col-md-6 col-lg-4" >
                    <div class="section-heading" >
                        <h6>Bài được đọc nhiều nhất</h6>
                    </div>
                    @foreach($posts as $p)
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="{{url("bai-viet/{$p->id}")}}" class="post-catagory">{{$p->Category->category_name}}</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>{{$p->title}}</h6>
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