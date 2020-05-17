@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Bình luận bài viết</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>Tác giả</th>
                        <th>Bình luận</th>
                        <th>Bài viết</th>
                        <th>Ngày tạo</th>
                        </thead>
                        <tbody>
                        @forelse($comments as $comment)
                            <tr class="tr-shadow">
                                <td>{{$comment->user_name}}</td>
                                <td>{{$comment->content}}</td>
                                <td>{{$comment->Post["title"]}}</td>
                                <td>{{$comment->created_at}}</td>
                            </tr>

                        @empty
                            <p>Không có bình luận nào</p>
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