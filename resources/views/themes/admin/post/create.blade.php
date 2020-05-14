@extends('themes.admin.layout.layout')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{__('Thêm bài viết')}}</h4>
                        </div>
                        <form action="{{url("admin/post/store")}} "  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="text-capitalize">{{__('Tiêu đề')}}</label>
                                            <input type="text" name="title" class="form-control @if($errors->has("title"))is-invalid @endif"  placeholder="{{__('Nhập tiêu đề')}}" required>
                                            @if($errors->has("title"))
                                                <p style="color:red">{{$errors->first("title")}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-capitalize">{{__('Người viết')}}</label>
                                        <input type="text" name="author" value="{{old("author")}}" class="form-control"  placeholder="{{__('Nhập tên tác giả')}}" >
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="form-group ">
                                            <label  class="control-label mb-1">{{__("Chuyên đề")}}</label>
                                            <select class="form-group form-control" name="category_id" required>
                                                @php
                                                    $categories = \App\Category::all();
                                                @endphp
                                                <option selected value=""></option>
                                                @foreach($categories as $c)
                                                    <option value="{{$c->id}}">{{$c->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="border-bottom" style="padding-bottom:1%">
                                            <label for="cc-name" class="control-label mb-1">Ảnh đại diện</label>
                                            <input type="file" name="image" multiple>

                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label class="text-capitalize">{{__('Mô tả')}}</label>
                                            <textarea type="text" name="short_desc" class="form-control "  placeholder="{{__('Nhập mô tả')}}" ></textarea>

                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label class="text-capitalize">{{__('Bài viết')}}</label>
                                            <textarea type="text" name="content" class="form-control "  placeholder="{{__('Nhập bài viết')}}" ></textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{__("Submit")}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection