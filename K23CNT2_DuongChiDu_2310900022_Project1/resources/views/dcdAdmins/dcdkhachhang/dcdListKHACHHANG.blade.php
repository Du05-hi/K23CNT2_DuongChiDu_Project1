<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách KHACHHANG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sách KHACHHANG</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>MAKHACHHANG</th>
                    <th>HOVATENKHACHHANG</th>
                    <th>EMAIL</th>
                    <th>MATKHAU</th>
                    <th>DIENTHOAI</th>
                    <th>DIACHI</th>
                    <th>NGAYDANGKI</th>
                    <th>TRANGTHAI</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $num = 0;
                @endphp
                @forelse ( $dcdkhachhang as $item)
                @php
                    $num++;
                @endphp
                    <tr>
                        <td>{{ $num }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->dcdmakhachhang }}</td>
                        <td>{{ $item->dcdhovatenkhachhang }}</td>
                        <td>{{ $item->dcdemail }}</td>
                        <td>{{ $item->dcdmatkhau }}</td>
                        <td>{{ $item->dcddienthoau }}</td>
                        <td>{{ $item->dcddiachi }}</td>
                        <td>{{ $item->dcdmgaydangki }}</td>
                        <td>
                            @if ($item->dcdtrangthai):
                                <span class="badge bg-success">hoat dong</span>;
                            @else:
                                <span class="badge bg -danger">khoa</span>;
                            @endif;
                        </td>
                        <td>
                            <a href="{{ route('dcdAdmins.dcdkhachhang.dcdShowKHACHHANG', $item->id) }}" class="btn btn-info btn-sm">Xem</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Không có dữ liệu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('dcdAdmins.dcdkhachhang.dcdCreateKHACHHANG') }}" class="btn btn-primary">Thêm KH</a>
    </section>
</body>
</html>