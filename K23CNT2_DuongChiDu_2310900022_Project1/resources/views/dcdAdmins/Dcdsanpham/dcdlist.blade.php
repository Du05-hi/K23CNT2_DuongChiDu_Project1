<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sách sản phẩm</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Mã loại</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $num = 0;
                @endphp
                @forelse ( $dcdsanpham as $item)
                @php
                    $num++;
                @endphp
                    <tr>
                        <td>{{ $num }}</td>
                        <td>{{ $item->dcdmasanpham }}</td>
                        <td>{{ $item->dcdtensanpham }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $item->dcdhinhanh) }}" alt="Hình ảnh" width="50" height="50">
                        </td>
                        <td>{{ $item->dcdsoluong }}</td>
                        <td>{{ number_format($item->dcddongia, 2) }}</td>
                        <td>{{ $item->dcdmaloai }}</td>
                        <td>
                            @if ($item->dcdtrangthai)
                                <span class="badge bg-success">Kích hoạt</span>
                            @else
                                <span class="badge bg-danger">Vô hiệu</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('dcdAdmins.Dcdsanpham.dcdShow', $item->id) }}" class="btn btn-info btn-sm">Xem</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Không có dữ liệu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('dcdAdmins.Dcdsanpham.dcdcreate') }}" class="btn btn-primary">Thêm sản phẩm</a>
    </section>
</body>
</html>