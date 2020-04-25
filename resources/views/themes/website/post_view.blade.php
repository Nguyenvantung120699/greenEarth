@extends('themes.website.layout.layout')



@section('content')
<div class="popular_places_area" style="padding-top:0px;padding-bottom:0px;">
        <div class="container">
            <div class="row" style="padding-top:5%;">
                <div class="col-md-8">
                    <div class="padding_top" style="padding-top:2%;padding-bottom:3%;">
                        <h2 class="text-left">Post Title</h2>
                    </div>
                    <div class="image_post col-lg-12" style="padding-bottom:5%;">
                        <img style="width:100%" src="img/place/1.png" alt="">
                    </div>
                    <div class="col-lg-12 text-left" style="padding-bottom:5%;">
                    <p>content post</p>
                    </div>
                    <div class="top-comment">
                        <div class="input-comment">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Bình luận...." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button">Gửi</button>
                                </div>
                            </div>
                        </div>
                        <div class="list-comment" style="padding-top:1%;padding-bottom:10%;">
                            <div class="card-body border-top border-bottom inset">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img style="width:80%" src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                        <p class="text-secondary text-center">25-04-2020</p>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="media-body" style="color:#FFD700">
                                            <h5 style="color:black;">Nguyen Van Tung</h5>
                                    </div>
                                    <div class="clearfix" ></div>
                                        <p>
                                            noi dung binh luan
                                        </p>
                                            <p>
                                                <a class="float-right btn text-success ml-2"> <i class="fa fa-reply"></i>trả lời</a>
                                                <a class="float-right text-danger btn"> <i class="fa fa-heart"></i>like</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="text-left border-bottom inset" style="padding-bottom:4%;padding-top:10%;">
                        <h5>Có thể bạn quan tâm</h5>
                    </div>
                    <div class="col-lg-12 border-bottom inset" style="padding-bottom:4%;padding-top:4%;">
                        <div class="row">
                            <div class="col-lg-4 col-md-4" style="padding-top:2%;">
                                <div class="img">
                                    <img style="width:100%" src="img/place/1.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8" style="padding-top:2%;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                        <div class="text" style="padding-bottom:2%;">
                                            <h5>title</h5>
                                        </div>
                                        <div class="text">
                                            <p>text .....</p>
                                        </div>
                                </div> 
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="text-left">Các hoạt động liên quan</h3>
            <div class="col-lg-12 border-top inset" style="padding-bottom:5%;">
                <div class="row">
                    <div class="col-lg-3 col-md-3" style="padding-top:2%;">
                        <div class="img">
                            <img style="width:100%" src="img/place/1.png" alt="">
                        </div>
                        <div class="img">
                            <h5>text .....</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3" style="padding-top:2%;">
                        <div class="img">
                            <img style="width:100%" src="img/place/1.png" alt="">
                        </div>
                        <div class="img">
                            <h5>text .....</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3" style="padding-top:2%;">
                        <div class="img">
                            <img style="width:100%" src="img/place/1.png" alt="">
                        </div>
                        <div class="img">
                            <h5>text .....</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3" style="padding-top:2%;">
                        <div class="img">
                            <img style="width:100%" src="img/place/1.png" alt="">
                        </div>
                        <div class="img">
                            <h5>text .....</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection