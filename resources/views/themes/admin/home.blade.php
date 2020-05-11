@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats bg-info">
                        <div class="card-header card-header-info card-header-icon ">
                            <div class="" style="float: left;padding-top: 10px">
                                <i class="material-icons" style="color:	#148a9d;">forum</i>
                            </div>
                            <h2 class="card-title">{{\App\Category::count()}} </h2>
                            <p class="card-category">Chuyên mục</p>

                        </div>
                        <div class="card-footer">
                            <a href="#" class="small-box-footer">More info <i class="fa fa_arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats bg-success">
                        <div class="card-header card-header-success card-header-icon ">
                            <div class="" style="float: left;padding-top: 5px">
                                <i class="material-icons" style="color: #228e3b;">format_align_left</i>
                            </div>
                            <h2 class="card-title">{{\App\Post::count()}}</h2>
                            <p class="card-category">Bài viết</p>

                        </div>
                        <div class="card-footer">
                            <a href="#" class="small-box-footer">More info <i class="fa fa_arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats bg-warning">
                        <div class="card-header card-header-warning card-header-icon ">
                            <div class="" style="float: left;padding-top: 5px">
                                <i class="fa fa-comments" style="color:	#d9a406;"></i>
                            </div>
                            <h2 class="card-title">{{\App\Comment::count()}}</h2>
                            <p class="card-category">Bình luận</p>

                        </div>
                        <div class="card-footer">
                            <a href="#" class="small-box-footer">More info <i class="fa fa_arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats bg-danger">
                        <div class="card-header card-header-warning card-header-icon ">
                            <div class="" style="float: left;padding-top: 5px">
                                <i class="material-icons" style="color:#bb2d3b;">library_books</i>
                            </div>
                            <h2 class="card-title">{{\App\Member::count()}}</h2>
                            <p class="card-category">Quản lý thành viên</p>

                        </div>
                        <div class="card-footer">
                            <a href="#" class="small-box-footer">More info <i class="fa fa_arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats bg-success">
                        <div class="card-header card-header-warning card-header-icon ">
                            <div class="" style="float: left;padding-top: 5px">
                                <i class="fa fa-globe" style="color:#228e3b;"></i>
                            </div>
                            <h2 class="card-title">{{\App\Donate::count()}}</h2>
                            <p class="card-category">Ủng hộ</p>

                        </div>
                        <div class="card-footer">
                            <a href="#" class="small-box-footer">More info <i class="fa fa_arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats bg-primary">
                        <div class="card-header card-header-warning card-header-icon ">
                            <div class="" style="float: left;padding-top: 5px">
                                <i class="material-icons" style="color:#708090;">account_box</i>
                            </div>
                            <h2 class="card-title">{{\App\User::count()}}</h2>
                            <p class="card-category">Tài khoản</p>

                        </div>
                        <div class="card-footer">
                            <a href="#" class="small-box-footer">More info <i class="fa fa_arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection