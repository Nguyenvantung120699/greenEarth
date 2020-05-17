@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Chiến dịch</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th></th>
                        <th>Ảnh đại diện</th>
                        <th>Tên chiến dịch</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Đơn vị tổ chức</th>
                        </thead>
                        <tbody>
                        @forelse($campaigns as $campaign)
                            <tr class="tr-shadow">
                                <td>
                                    <div class="table-data-feature">
                                        <form action="{{url("admin/campaign/detail",['id'=>$campaign->id])}}">
                                            <button class="btn btn-default" title="chi tiết" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="material-icons">visibility</i>
                                            </button>
                                        </form>
                                        <form action="{{url("admin/campaign/edit",['id'=>$campaign->id])}}">
                                            <button class="btn btn-default" title="edit" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="material-icons">create</i>
                                            </button>
                                        </form>
                                        <form action="{{url("admin/campaign/delete",['id'=>$campaign->id])}}">
                                            <button onclick="return confirm('Xóa chiến dịch ?')" title="delete" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td><img src="{{asset($campaign->image)}}" class="img-thumbnail"/></td>
                                <td>{{$campaign->campaign_name}}</td>
                                <td>{{$campaign->start_date}}</td>
                                <td>{{$campaign->end_date}}</td>
                                <td>{{$campaign->organizational_units}}</td>

                            </tr>
                            <tr class="spacer"></tr>
                        @empty
                            <p>Không có chiến dịch nào</p>
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