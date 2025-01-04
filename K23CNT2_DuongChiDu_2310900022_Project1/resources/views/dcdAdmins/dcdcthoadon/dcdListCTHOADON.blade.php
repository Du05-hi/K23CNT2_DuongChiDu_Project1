<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách CTHOADON</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sách CTHOADON</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>HOADONID</th>
                    <th>SANPHAMID</th>
                    <th>SO LUONG MUA</th>
                    <th>DON GIA MUA</th>
                    <th>THANH TIEN</th>
                    <th>TRANG THAI</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $num = 0;
                @endphp
                @forelse ( $dcdcthoadon as $item)
                @php
                    $num++;
                @endphp
                    <tr>
                        <td>{{ $num }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->dcdhoadonid }}</td>
                        <td>{{ $item->dcdsanphamid }}</td>
                        <td>{{ $item->dcdsoluongmua }}</td>
                        <td>{{ number_format($item->dcddongiamua, 2) }}</td>
                        <td>{{ $item->dcdthanhtien }}</td>
                        <td>
                            @if ($item->dcdtrangthai)
                                <span class="badge bg-success">tra lai</span>
                            @else
                                <span class="badge bg-danger">xoa</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('dcdAdmins.dcdcthoadon.dcdShowCTHOADON', $item->id) }}" class="btn btn-info btn-sm">Xem</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Không có dữ liệu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('dcdAdmins.dcdcthoadon.dcdCreateCTHOADON') }}" class="btn btn-primary">Thêm sản phẩm</a>
    </section>
</body>
</html>