@extends('themes.admin.layout.layout')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Ủng hộ</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Số ĐT</th>
                        <th>Địa chỉ</th>
                        <th>Ủng hộ</th>
                        <th>Thanh toán</th>
                        <th>Ghi chú</th>
                        <th>Chiến dịch</th>
                        </thead>
                        <tbody>
                        @forelse($donates as $donate)
                            <tr class="tr-shadow">
                                <td>{{$donate->id}}</td>
                                <td>{{$donate->name}}</td>
                                <td>{{$donate->email}}</td>
                                <td>{{$donate->telephone}}</td>
                                <td>{{$donate->address}}</td>
                                <td>{{$donate->getDonate()}} $</td>
                                <td>{{$donate->payment_method}}</td>
                                <td>{{$donate->message}}</td>
                                <td>{{$donate->Campaign->campaign_name}}</td>
                            </tr>
                            <tr class="spacer"></tr>
                        @empty
                            <p>Không có ủng hộ  nào</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection