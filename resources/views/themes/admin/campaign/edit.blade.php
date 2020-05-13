@extends('themes.admin.layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card card-primary">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{__('Sửa chiến dịch')}}</h4>
                        </div>
                        <div class="container">
                            <form action="{{url("admin/campaign/update",['id'=>$campaigns->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label class="text-capitalize">{{__('Tiêu đề')}}</label>
                                                <input type="text" name="event_name" class="form-control" value="{{$campaigns->campaign_name}}" required>

                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="border-bottom" style="padding-bottom:1%">
                                                <label for="cc-name" class="control-label mb-1">Ảnh đại diện</label>
                                                <input type="file" value="{{$campaigns->image}}" name="image" multiple>

                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <label class="text-capitalize">{{__('Bài viết')}}</label>
                                                <textarea type="text" name="content" class="form-control " rows="5" > {{$campaigns->content}}</textarea>

                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="form-event-date">Thời gian bắt đầu</label>
                                                    <input class="form-control" data-error="event date is required" type="date"
                                                           name="start_date" value="{{$campaigns->start_date}}" id="form-event-date" />
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="form-event-date">Thời gian kết thúc</label>
                                                    <input class="form-control" data-error="event date is required" type="date"
                                                           name="end_date" value="{{$campaigns->end_date}}" id="form-event-date" />
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label class="text-capitalize">{{__('Đơn vị tổ chức')}}</label>
                                                <textarea type="text" name="organizational_units" class="form-control ">{{$campaigns->organizational_units}}</textarea>

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