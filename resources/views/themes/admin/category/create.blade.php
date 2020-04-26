@extends('themes.admin.layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{__('Thêm danh mục')}}</h4>
                        </div>
                        <form action="{{url("admin/category/store")}} "  method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="text-capitalize">{{__('Name Category')}}</label>
                                            <input type="text" name="category_name" class="form-control @if($errors->has("category_name"))is-invalid @endif"  placeholder="{{__('Nhập tên danh mục')}}" required>
                                            @if($errors->has("category_name"))
                                                <p style="color:red">{{$errors->first("category_name")}}</p>
                                            @endif
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