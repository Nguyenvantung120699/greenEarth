@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Danh Mục</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>ID</th>
                        <th>Trạng thái</th>
                        <th>Tên Chuyên Mục</th>
                        <th>Chuỗi đường dẫn</th>
                        <th>
                            <div class="table-data-feature">
                                <form  method="get" action="{{url('admin/category/create')}}">
                                    <button class="btn btn-info" title="Thêm chuyên mục">
                                        <i class="material-icons">add</i>
                                    </button>
                                </form>
                            </div>
                        </th>
                        </thead>
                        <tbody>
                        @forelse($categories as $c)
                            <tr class="tr-shadow">
                                <td>{{$c->id}}</td>

                                <td>
                                    <div class="table-data-feature">
                                        <div id="status" class="form-buttons-w">
                                            @if ($c->status == "active")
                                                <a onclick="return confirm('Xác nhận vô hiệu hóa ?')" title="Click here to disable"  href="{{ url("admin/category/{$c->id}/disable")}}"  class="btn btn-success">
                                                    Hoạt động
                                                </a>
                                            @elseif ($c->status == "disable")
                                                <a onclick="return confirm('Xác nhận kích hoạt trở lại ?')" title="active"   href="{{ url("admin/category/{$c->id}/restore")}}" class="btn btn-default">
                                                    Vô hiệu hóa
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>{{$c->category_name}}</td>
                                <td>{{$c->path}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <form action="{{url("admin/category/edit",['id'=>$c->id])}}">
                                            <button class="btn btn-default" title="edit" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="material-icons">create</i>
                                            </button>
                                        </form>
                                        <form action="{{url("admin/category/delete",['id'=>$c->id])}}">
                                            <button onclick="return confirm('Xóa chuyên mục ?')" title="delete" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                        @empty
                            <p>Không có danh mục nào</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection