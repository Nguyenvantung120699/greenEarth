@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Sự kiện</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th></th>
                        <th>Ảnh đại diện</th>
                        <th>Tên sự kiện</th>
                        <th>Mục tiêu</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Đơn vị tổ chức</th>
                        <th>Địa chỉ</th>

                        </thead>
                        <tbody>
                        @forelse($events as $event)
                            <tr class="tr-shadow">
                                <td>
                                    <div class="table-data-feature">
                                        <form action="{{url("admin/event/detail",['id'=>$event->id])}}">
                                            <button class="btn btn-info" title="chi tiết" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="material-icons">visibility</i>
                                            </button>
                                        </form>
                                        <form action="{{url("admin/event/edit",['id'=>$event->id])}}">
                                            <button class="btn btn-default" title="edit" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="material-icons">create</i>
                                            </button>
                                        </form>
                                        <form action="{{url("admin/event/delete",['id'=>$event->id])}}">
                                            <button onclick="return confirm('Xóa sự kiện ?')" title="delete" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td><img src="{{asset($event->image)}}" class="img-thumbnail"/></td>
                                <td>{{$event->event_name}}</td>
                                <td>{{$event->target}}</td>
                                <td>{{$event->start_date}}</td>
                                <td>{{$event->end_date}}</td>
                                <td>{{$event->organizational_units}}</td>
                                <td>{{$event->address}}</td>
                            </tr>
                            <tr class="spacer"></tr>
                        @empty
                            <p>Không có sự kiện nào</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>
@endsection