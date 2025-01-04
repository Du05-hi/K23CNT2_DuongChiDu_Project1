<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết sản HD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Chi tiết HD</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $Cthoadon->id }}</td>
            </tr>
            <tr>
                <th>HOADONID</th>
                <td>{{ $Cthoadon->dcdhoadonid }}</td>
            </tr>
            <tr>
                <th>SANPHAMID</th>
                <td>{{ $Cthoadon->dcdsanphamid}}</td>
            </tr>
            <tr>
                <th>SO LUONG MUA</th>
                <td>{{ $Cthoadon->dcdsoluongmua}}</td>
            </tr>
            <tr>
                <th>DON GIA MUA</th>
                <td>{{ number_format($Cthoadon->dcddongiamua, 2) }}</td>
            </tr>
            <tr>
                <th>THANH TIEN</th>
                <td>{{ $Cthoadon->dcdthanhtien }}</td>
            </tr>
            <tr>
                <th>Trạng thái</th>
                <td>
                    @if ($sanPham->dcdtrangthai)
                        <span class="badge bg-success">TRA LAI</span>
                    @else
                        <span class="badge bg-danger">XOA</span>
                    @endif
                </td>
            </tr>
        </table>
        <a href="{{ route('dcdShowCTHOADON') }}" class="btn btn-secondary">Quay lại</a>
    </section>
</body>
</html>