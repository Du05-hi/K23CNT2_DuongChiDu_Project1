<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết KH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Chi tiết KH</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $Khachhang->id }}</td>
            </tr>
            <tr>
                <th>MAKHACHHANG</th>
                <td>{{ $Khachhang->dcdmakhachhang }}</td>
            </tr>
            <tr>
                <th>HOVATENKHACHHANG</th>
                <td>{{ $Khachang->dcdhovatenkhachhang}}</td>
            </tr>
            <tr>
                <th>EMAIL</th>
                <td>{{ $Khachhang->dcdemail}}</td>
            </tr>
            <tr>
                <th>MATKHAU</th>
                <td>{{ $Khachang->dcdmatkhau }}</td>
            </tr>
            <tr>
                <th>DIEN THOAI</th>
                <td>{{ $Khachang->dcddiethoai }}</td>
            </tr>
            <tr>
                <th>DIA CHI</th>
                <td>{{ $Khachang->dcddiachi }}</td>
            </tr>
            <tr>
                <th>NGAY DANG KI</th>
                <td>{{ $Khachang->dcdngaydangki }}</td>
            </tr>
            <tr>
                <th>Trạng thái</th>
                <td>
                    @if ($sanPham->dcdtrangthai):
                        <span class="badge bg-success">HOAT DONG</span>;
                    @else:
                        <span class="badge bg-danger">KHOA</span>;
                    @endif;
                </td>
            </tr>
        </table>
        <a href="{{ route('dcdShowKHACHHANG') }}" class="btn btn-secondary">Quay lại</a>
    </section>
</body>
</html>