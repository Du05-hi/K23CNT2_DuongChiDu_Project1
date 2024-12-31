@extends('layout.admins.master')
@section('title','Danh sách loại sản phẩm')
@section('content-body')
    <div class="container border">
        <div class="row">
           <div class="col-12">
            <h1>Danh sách loại sản phẩm</h1> 
            <a href="{{route('dcdAdmins.dcdloaisanpham.dcdCreate')}}" class="btn btn-success">Thêm mới</a>
           </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã Loại SP</th>
                        <th>Tên loại SP</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dcdloaisanpham as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->dcdmaloai}}</td>
                            <td>{{$item->dcdtenloai}}</td>
                            <td>{{ $item->dcdtrangthai == 1 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                            <td>
                                <a href="#" class="btn btn-primary">Xem</a>
                                <a href="{{ route('dcdAdmins.dcdloaisanpham.dcdEdit', ['id' => $item->dcdmaloai]) }}" class="btn btn-warning">Sửa</a>
                                <a href="/dcdAdmins/dcdloaisanpham/dcdDelete/{{$item->id}}" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">Không có dữ liệu</th>
                        </tr>
                    @endforelse 
                </tbody>
            </table>
        </div>
    </div>
@endsection