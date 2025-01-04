<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm CTHOADON</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>THEM KHACH HANG</h1>
        <form action="{{ route('dcdAdmins.dcdcthoadon.dcdcreateCTHOADONSubmit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">id</label>
                <input type="text" name="id" id="id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdmakhachhang" class="form-label">ma khach hang</label>
                <input type="text" name="dcdmakhachhang" id="dcdmakhachhang" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdhovatenkhachhang" class="form-label">ho va ten KH</label>
                <input type="text" name="dcdhovatenkhachhang" id="dcdhovatenkhachhang" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdemail" class="form-label">email</label>
                <input type="number" name="dcdemail" id="dcdemail" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdmatkhau" class="form-label">MK</label>
                <input type="number" step="0.01" name="dcdmatkhau" id="dcdmatkhau" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcddienthoai" class="form-label">DT</label>
                <input type="number" name="dcddienthoai" id="dcddienthoai" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcddiachi" class="form-label">DC</label>
                <input type="number" name="dcddiachi" id="dcddiachi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdngaydangki" class="form-label">NGAY DANG KI</label>
                <input type="number" name="dcdngaydangki" id="dcdngaydangki" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdtrangthai" class="form-label">Trạng thái</label>
                <select name="dcdtrangthai" id="dcdtrangthai" class="form-control">
                    <option value="2">tam khoa</option>
                    <option value="1">khoa</option>
                    <option value="0">hoat dong</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ route('dcdAdmins.dcdkhachhang') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
</body>
</html>