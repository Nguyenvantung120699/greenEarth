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
                        <th>Ảnh đại diện</th>
                        <th>Tiêu đề</th>
                        <th>Chuyên mục</th>
                        <th>Lượt xem</th>
                        <th>Tác giả</th>
                        <th>Ngày xuất bản</th>

                        </thead>
                        <tbody>
                        @forelse($posts as $p)
                            <tr class="tr-shadow">
                                <td>
                                    <div class="table-data-feature">
                                        <form action="{{url("admin/post/edit",['id'=>$p->id])}}">
                                            <button class="btn btn-default" title="edit" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="material-icons">create</i>
                                            </button>
                                        </form>
                                        <form action="{{url("admin/post/delete",['id'=>$p->id])}}">
                                            <button onclick="return confirm('Xóa bài viết ?')" title="delete" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td></td>
                                <td>{{$p->title}}</td>
                                <td>{{$p->category->category_name}}</td>
                                <td>{{$p->count_views}}</td>
                                <td>{{$p->author}}</td>
                                <td>{{$p->created_at}}</td>

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
    <script type="text/javascript">

    </script>
@endsection