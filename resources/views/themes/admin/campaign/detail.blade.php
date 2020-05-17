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
                        <th>Tổng số tiền ủng hộ</th>

                        </thead>
                        <tbody>

                            <tr class="tr-shadow">

                                <td><img src="{{asset($campaigns->image)}}" class="img-thumbnail"/></td>
                                <td>{{$campaigns->campaign_name}}</td>
                                <td>{{$campaigns->start_date}}</td>
                                <td>{{$campaigns->end_date}}</td>
                                <td>{{$campaigns->organizational_units}}</td>
                                <td>{{$donate_total}} $</td>

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
{{--                                <th>Ghi chú</th>--}}
                                <th>Số tiền ủng hộ</th>
                            </thead>
                            <tbody>
                                @forelse($donate as $d)
                                    <tr class="tr-shadow">
                                       <td>{{$d->id}}</td>
                                       <td>{{$d->name}}</td>
                                       <td>{{$d->email}}</td>
                                       <td>{{$d->telephone}}</td>
                                       <td>{{$d->address}}</td>
{{--                                       <td>{{$d->message}}</td>--}}
                                        <td>{{$d->getDonate()}} $</td>
                                    </tr>

                                @empty
                                     Không có người nào ủng hộ
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection