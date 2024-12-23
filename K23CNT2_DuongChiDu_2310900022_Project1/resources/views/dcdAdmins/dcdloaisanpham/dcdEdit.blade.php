@extends('layout.admins.master')
@section('title', 'Sửa loại sản phẩm')

@section('content-body')
    <div class="container">
        <h1>Sửa loại sản phẩm</h1>
        <form action="{{ route('dcdAdmins.dcdloaisanpham.dcdEditSubmit', $item->dcdmaloai) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="dcdtenloai">Tên Loại SP</label>
                <input type="text" name="dcdtenloai" class="form-control" value="{{ $item->dcdtenloai }}" required>
            </div>
            <div class="form-group">
                <label for="dcdtrangthai">Trạng thái</label>
                <select name="dcdtrangthai" class="form-control">
                    <option value="1" {{ $item->dcdtrangthai == 1 ? 'selected' : '' }}>Hoạt động</option>
                    <option value="0" {{ $item->dcdtrangthai == 0 ? 'selected' : '' }}>Không hoạt động</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection
