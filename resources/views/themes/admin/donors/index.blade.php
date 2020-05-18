@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Bài viết</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th></th>
                        <th>Logo</th>
                        <th>Tên công ty</th>
                        <th>Tên Sự kiện</th>
                        </thead>
                        <tbody>
                        @forelse($donors as $donor)
                            <tr class="tr-shadow">
                                <td>
                                    <div class="table-data-feature">
                                        <form action="{{url("admin/donors/edit",['id'=>$donor->id])}}">
                                            <button class="btn btn-default" title="edit" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="material-icons">create</i>
                                            </button>
                                        </form>
                                        <form action="{{url("admin/donors/delete",['id'=>$donor->id])}}">
                                            <button onclick="return confirm('Xóa nhà tài trợ ?')" title="delete" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td><img src="{{asset($donor->logo)}}" class="img-thumbnail"/></td>
                                <td>{{$donor->name}}</td>
                                <td>{{$donor->Event->event_name}}</td>

                            </tr>
                            <tr class="spacer"></tr>
                        @empty
                            <p>Không có đơn vị tài trợ nào</p>
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