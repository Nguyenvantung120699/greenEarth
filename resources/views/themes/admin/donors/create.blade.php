@extends('themes.admin.layout.layout')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{__('Thêm nhà tài trợ')}}</h4>
                        </div>
                        <form action="{{url("admin/donors/store")}} "  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="text-capitalize">{{__('Tên công ty')}}</label>
                                            <input type="text" name="name" class="form-control @if($errors->has("name"))is-invalid @endif"  placeholder="{{__('Nhập tên công ty')}}" required>
                                            @if($errors->has("name"))
                                                <p style="color:red">{{$errors->first("name")}}</p>
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
                                            <label  class="control-label mb-1">{{__("Sự kiện")}}</label>
                                            <select class="form-group form-control" name="event_id" required>
                                                <option selected value=""></option>
                                                @foreach(\App\Event::all() as $event)
                                                    <option value="{{$event->id}}">{{$event->event_name}}</option>
                                                @endforeach
                                            </select>
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