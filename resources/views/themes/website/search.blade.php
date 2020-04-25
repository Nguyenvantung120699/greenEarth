@extends('themes.website.layout.layout')



@section('content')


<section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="home-tab"
                        data-toggle="tab"
                        href="#home"
                        role="tab"
                        aria-controls="home"
                        aria-selected="true"
                    >Category</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="user-tab"
                        data-toggle="tab"
                        href="#user"
                        role="tab"
                        aria-controls="user"
                        aria-selected="false"
                    >User</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link active"
                        id="review-tab"
                        data-toggle="tab"
                        href="#review"
                        role="tab"
                        aria-controls="review"
                        aria-selected="false"
                    >Post</a
                    >
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                    @forelse($category as $c)
                        <div class="col-lg-4 col-md-6">
                            <div class="single_destination">
                                <div class="thumb">
                                    <img src="img/destination/1.png" alt="">
                                </div>
                                <div class="content">
                                    <p class="d-flex align-items-center">Bảo vệ động vật hoang dã</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="testimonial_area col-lg-12">
                            <div class="container">
                                <div class="row">
                                <p>Khong tim thay danh muc nao</p>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>

                <div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab">
                    <div class="row">
                    @forelse($user as $u)
                        <div class="col-lg-4 col-md-6">
                            <div class="testimonial_area col-lg-12">
                                <div class="container">
                                    <p class="d-flex align-items-center">Name : <b>{{$u->name}}</b></p>
                                    <p class="d-flex align-items-center">Email : {{$u->email}}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="testimonial_area col-lg-12">
                            <div class="container">
                                <div class="row">
                                    <p>Khong tim thay nguoi nao</p>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>

            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
            <div class="popular_places_area" style="padding-top:0px;padding-bottom:0px;">
                <div class="container">
                    <div class="row">
                    @forelse($post as $p)
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="single_place">
                                        <div class="place_info">
                                            <a href="destination_details.html"><h3>post title</h3></a>
                                            <p>post body.....</p>
                                        </div>
                                        <div class="thumb">
                                            <img src="img/place/1.png" alt="">
                                        </div>
                                        <div class="place_info">
                                            <a href="destination_details.html"><h5>Commnet</h5></a>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Viết Bình Luận..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-info" type="button">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="testimonial_area col-lg-12">
                            <div class="container">
                                <div class="row">
                                    <p>Khong tim thay bai viet nao</p>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection