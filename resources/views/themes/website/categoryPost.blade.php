@extends('themes.website.layout.layout')



@section('content')
<div class="popular_places_area" style="padding-top:0px;padding-bottom:0px;">
    <div class="padding_top" style="padding-top:2%;padding-bottom:2%;">
        <h2 class=" text-center">{{$category->category_name}}</h2>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8" style="padding-bottom:2%;">
                @foreach($post as $p)
                    <div class="col-lg-12 border-top inset single_place" style="padding-bottom:2%;height:auto;border-radius:1%;">
                        <div class="row">
                            <div class="col-lg-4 col-md-4" style="padding-top:2%;">
                                <div class="img">
                                    <img style="width:100%" src="https://kenh14cdn.com/thumb_w/640/2017/h1-1488172543693-7-4-313-599-crop-1488173064446.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8" style="padding-top:2%;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 text-left">
                                        <div class="text" style="padding-bottom:2%;">
                                            <a href="{{url("/viewpost/{$p->id}")}}"><h5 class="text-black">{{$p->title}}</h5></a>
                                        </div>
                                        <div class="text">
                                            <p>{{$p->short_desc}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

                <div class="col-md-4">
                    <div class="text-left border-top inset" style="padding-bottom:4%;padding-top:-50px;">
                        <h2>Đọc nhiều</h2>
                    </div>
                    @foreach($posts as $ps)
                    <div class="col-lg-12 border-bottom inset single_place" style="padding-bottom:4%;padding-top:4%;;border-radius:1%;">
                        <div class="row">
                            <div class="col-lg-4 col-md-4" style="padding-top:2%;">
                                <div class="img">
                                    <img style="width:100%" src="https://kenh14cdn.com/thumb_w/640/2017/h1-1488172543693-7-4-313-599-crop-1488173064446.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8" style="padding-top:2%;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                        <div class="text" style="padding-bottom:2%;">
                                            <a href="{{url("/viewpost/{$p->id}")}}"><b class="text-black">{{$ps->title}}</b></a>
                                        </div>
                                        <div class="text">
                                            <p>{{$ps->short_desc}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection