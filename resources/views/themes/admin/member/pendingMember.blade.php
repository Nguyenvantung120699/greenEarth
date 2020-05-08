@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Thành viên chờ duyệt</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>ID</th>
                        <th>Trạng thái</th>
                        <th>Tên thành viên</th>
                        <th>Email</th>
                        <th>Số ĐT</th>
                        <th>Địa chỉ</th>
                        </thead>
                        <tbody>
                        @forelse($members as $member)
                            <tr class="tr-shadow">
                                <td>{{$member->id}}</td>

                                <td>
                                    <div class="table-data-feature">
                                        <div id="status" class="form-buttons-w">
                                            @if ($member->status == "1")
                                                <a onclick="return confirm('Xác nhận hủy tư cách thành viên ?')" title="Click here to disable"  href="{{ url("admin/member/{$member->id}/pending")}}"  class="btn btn-success">
                                                    Hoạt động
                                                </a>
                                            @elseif ($member->status == "0")
                                                <a onclick="return confirm('Xác nhận thành viên ?')" title="active"   href="{{ url("admin/member/{$member->id}/restore")}}" class="btn btn-default">
                                                    Chờ duyệt
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>{{$member->name}}</td>
                                <td>{{$member->email}}</td>
                                <td>{{$member->telephone}}</td>
                                <td>{{$member->address}}</td>
                            </tr>
                            <tr class="spacer"></tr>
                        @empty
                            <p>Không có thành viên  nào</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection