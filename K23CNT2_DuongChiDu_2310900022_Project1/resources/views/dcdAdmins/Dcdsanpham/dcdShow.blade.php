<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Chi tiết sản phẩm</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <tr>
                <th>Mã sản phẩm</th>
                <td>{{ $sanPham->dcdmasanpham }}</td>
            </tr>
            <tr>
                <th>Tên sản phẩm</th>
                <td>{{ $sanPham->dcdtensanpham }}</td>
            </tr>
            <tr>
                <th>Hình ảnh</th>
                <td><img src="{{ asset('storage/' . $sanPham->dcdhinhanh) }}" alt="Hình ảnh" width="100" height="100"></td>
            </tr>
            <tr>
                <th>Số lượng</th>
                <td>{{ $sanPham->dcdsoluong }}</td>
            </tr>
            <tr>
                <th>Đơn giá</th>
                <td>{{ number_format($sanPham->dcddongia, 2) }}</td>
            </tr>
            <tr>
                <th>Mã loại</th>
                <td>{{ $sanPham->dcdmaloai }}</td>
            </tr>
            <tr>
                <th>Trạng thái</th>
                <td>
                    @if ($sanPham->dcdtrangthai)
                        <span class="badge bg-success">Kích hoạt</span>
                    @else
                        <span class="badge bg-danger">Vô hiệu</span>
                    @endif
                </td>
            </tr>
        </table>
        <a href="{{ route('dcdShow') }}" class="btn btn-secondary">Quay lại</a>
    </section>
</body>
</html>