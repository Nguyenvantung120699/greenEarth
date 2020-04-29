@extends('themes.admin.layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card card-primary">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{__('Sửa bài viết')}}</h4>
                        </div>
                        <div class="container">
                            <form action="{{url("admin/post/update",['id'=>$posts->id])}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <label class="text-capitalize">{{__('Tiêu đề')}}</label>
                                                <input  value="{{$posts->title}}" name="title" class="form-control @if($errors->has("title"))is-invalid @endif"  placeholder="{{__('Nhập tiêu đề')}}" required>
                                                @if($errors->has("title"))
                                                    <p style="color:red">{{$errors->first("title")}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="form-group ">
                                                <label  class="control-label mb-1">{{__("Chuyên đề")}}</label>
                                                <select class="form-group form-control" name="category_id" >

                                                    <option selected value="{{$posts->category_id}}">{{$posts->category->category_name}}</option>

                                                    @foreach(\App\Category::all() as $c)
                                                        <option value="{{$c->category_id}}">{{$c->category_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <label class="text-capitalize">{{__('Mô tả')}}</label>
                                                <textarea name="short_desc" class="form-control"  rows="2"  placeholder="{{__('Nhập mô tả')}}" >{{$posts->short_desc}}</textarea>

                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <label class="text-capitalize">{{__('Bài viết')}}</label>
                                                <textarea   name="content" class="form-control"  rows="15"  placeholder="{{__('Nhập bài viết')}}" >{{$posts->content}}</textarea>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{__("Submit")}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection