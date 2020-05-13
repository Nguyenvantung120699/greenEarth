@extends('themes.admin.layout.layout')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{__('Thêm sự kiên')}}</h4>
                        </div>
                        <form action="{{url("admin/event/store")}} "  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="text-capitalize">{{__('Tiêu đề')}}</label>
                                            <input type="text" name="event_name" class="form-control @if($errors->has("title"))is-invalid @endif"  placeholder="{{__('Nhập tiêu đề')}}" required>
                                            @if($errors->has("title"))
                                                <p style="color:red">{{$errors->first("title")}}</p>
                                            @endif
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
                                            <label class="text-capitalize">{{__('Bài viết')}}</label>
                                            <textarea type="text" name="content" class="form-control " rows="5"  placeholder="{{__('Nhập bài viết')}}" ></textarea>

                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="form-event-date">Thời gian bắt đầu</label>
                                                <input class="form-control" data-error="event date is required" type="date"
                                                       name="start_date" id="form-event-date" />
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="form-event-date">Thời gian kết thúc</label>
                                                <input class="form-control" data-error="event date is required" type="date"
                                                       name="end_date" id="form-event-date" />
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="text-capitalize">{{__('Đơn vị tổ chức')}}</label>
                                            <textarea type="text" name="organizational_units" class="form-control "  placeholder="{{__('Nhập đơn vị tổ chức')}}" ></textarea>

                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="text-capitalize">{{__('Địa chỉ')}}</label>
                                            <textarea type="text" name="address" class="form-control "  placeholder="{{__('Nhập địa chỉ')}}" ></textarea>

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