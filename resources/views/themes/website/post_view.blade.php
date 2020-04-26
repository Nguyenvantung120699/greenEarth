@extends('themes.website.layout.layout')



@section('content')
<div class="popular_places_area" style="padding-top:0px;padding-bottom:0px;">
        <div class="container">
            <div class="row" style="padding-top:5%;">
                <div class="col-md-8 single_place" style="padding-bottom:2%;border-radius:1%;">
                    <div class="padding_top" style="padding-top:2%;padding-bottom:3%;">
                        <h2 class="text-left">{{$post->title}}</h2>
                    </div>
                    <div class="padding_top" style="padding-top:1%;padding-bottom:2%;">
                        <h5>{{$post->short_desc}}</h5>
                    </div>
                    <div class="image_post col-lg-12" style="padding-bottom:5%;">
                        <img style="width:100%" src="https://kenh14cdn.com/thumb_w/640/2017/h1-1488172543693-7-4-313-599-crop-1488173064446.jpg" alt="">
                    </div>
                    <div class="col-lg-12 text-left" style="padding-bottom:5%;">
                        <p>{{$post->content}}</p>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-6 text-left" style="padding-bottom:5%;">
                                Tác Giả : <b style="color:black;">{{$post->author}}</b>
                            </div>
                            <div class="more_place_btn text-center col-md-6" style="margin-top:-2%;">
                                <a href="#" class="login boxed-btn4" data-toggle="modal" data-target="#donate">
                                    Donate
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="top-comment">
                    <form action="{{url("postComment")}}" method="POST" id="commentForm">
                    @csrf
                        <div class="input-comment">
                            <div class="input-group mb-3">
                                <input name="content" type="text" class="form-control" placeholder="Bình luận...." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success login boxed-btn4" data-toggle="modal" data-target="#comment_user" type="button">Gửi</button>
                                </div>
                            </div>
                        </div>
                        </form>
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
                                                <a class="float-right btn text-success   ml-2"> <i class="fa fa-reply"></i>trả lời</a>
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
                    @foreach($postss as $p)
                    <div class="col-lg-12 border-bottom inset single_place" style="padding-bottom:4%;padding-top:4%;border-radius:1%;">
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
                                            <a href="{{url("/viewpost/{$p->id}")}}"><b style="color:black;">{{$p->title}}</b></a>
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
            </div>

            <div class="col-lg-12 border-bottom inset"><h3 class="text-left">Các hoạt động liên quan</h3></div>
            <div class="col-lg-12" style="padding-top:1%;">
                <div class="row">
                @foreach($posts as $pt)
                    <div class="col-lg-3 col-md-3 single_place border inset" style="padding-top:2%;border-radius:1%;">
                        <div class="img">
                            <img style="width:100%" src="https://kenh14cdn.com/thumb_w/640/2017/h1-1488172543693-7-4-313-599-crop-1488173064446.jpg" alt="">
                        </div>
                        <div class="title">
                            <a href="{{url("/viewpost/{$p->id}")}}"><b class="text-black">{{$pt->title}}</b></a>
                        </div>
                        <div class="introduce">
                            <p class="text-black">{{$pt->short_desc}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- modal_commnent -->
    <div class="modal fade" id="comment_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					User info
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">
				@csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
						<button id="loginBtn3" type="submit" class="login100-form-btn">
						        submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    </div>
</div>
</div>
    <script type="text/javascript">
      $(document).ready(function () {
        $("#loginBtn3").submit((e) => {
            e.preventDefault();
           $.ajax({
               type:"POST",
               url: $("#commentForm").attr("action"),,
               data: {
				   content: $("#contactForm").serialize(),
                   _token: $("input[name=_token]").val(),
                   name: $("input[name=name]").val(),
                   email: $("input[name=email]").val(),
               },
               dataType: "json",
               success: function (res) {
                   if(res.status){
                        location.reload();
                   }else{
                       alert(res.message);
                   }
               }
           });
        });
     });
    </script>
@endsection