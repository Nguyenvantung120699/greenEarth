@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Chi tiết chiến dịch</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>Ảnh đại diện</th>
                        <th>Tên Chiến dịch</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Đơn vị tổ chức</th>
                        <th>Thành viên tham gia</th>

                        </thead>
                        <tbody>

                            <tr class="tr-shadow">
                                <td><img src="{{asset($events->image)}}" class="img-thumbnail"/></td>
                                <td>{{$events->event_name}}</td>
                                <td>{{$events->start_date}}</td>
                                <td>{{$events->end_date}}</td>
                                <td>{{$events->organizational_units}}</td>
                                <td>{{$events->Member->count()}}</td>

                            </tr>
                            <tr class="spacer"></tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                    <h4 class="card-title mt-0"> Danh sách người ủng hộ chiến dịch</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>SĐT</th>
                                <th>Địa chỉ</th>
                                <th>Ghi chú</th>
{{--                                <th>Số tiền ủng hộ</th>--}}
                            </thead>
                            <tbody>
                                @forelse($member as $d)
                                    <tr class="tr-shadow">
                                       <td>{{$d->id}}</td>
                                       <td>{{$d->name}}</td>
                                       <td>{{$d->email}}</td>
                                       <td>{{$d->telephone}}</td>
                                       <td>{{$d->address}}</td>
                                       <td>{{$d->message}}</td>

                                    </tr>

                                @empty
                                     Không có thành viên nào
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection