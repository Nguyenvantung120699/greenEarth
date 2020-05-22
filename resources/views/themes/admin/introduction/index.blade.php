@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Quản lý nhân viên</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>ID</th>

                        <th>Tên thành viên</th>
                        <th>Email</th>
                        <th>Số ĐT</th>
                        <th>Địa chỉ</th>
                        </thead>
                        <tbody>
                        @forelse($introduction as $member)
                            <tr class="tr-shadow">
                                <td>{{$member->id}}</td>


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