@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Tài khoản</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th></th>
                            <th>User name</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>role</th>
                            <th>Ngày tạo tài khoản</th>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr class="tr-shadow">
                                    <td>
                                        <div class="table-data-feature">

                                            <form action="{{url("admin/account/delete",['id'=>$user->id])}}">
                                                <button onclick="return confirm('Xóa tài khoản ?')" title="delete" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->full_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>{{$user->created_at}}</td>

                                </tr>
                                <tr class="spacer"></tr>
                            @empty
                                <p>Không có tài khoản  nào</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection