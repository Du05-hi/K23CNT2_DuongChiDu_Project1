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
        <h1>Thêm Sản Phẩm</h1>
        <form action="{{ route('dcdAdmins.dcdcthoadon.dcdcreateCTHOADONSubmit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">id</label>
                <input type="text" name="id" id="id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdhoadonid" class="form-label">hoa donid</label>
                <input type="text" name="dcdhoadonid" id="dcdhoadonid" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdsanphamid" class="form-label"> sản phẩmid</label>
                <input type="text" name="dcdsanphamid" id="dcdsanphamid" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdssoluongmua" class="form-label">Số lượng mua</label>
                <input type="number" name="dcdssoluongmua" id="dcdssoluongmua" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcddongiamua" class="form-label">Đơn giá mua</label>
                <input type="number" step="0.01" name="dcddongiamua" id="dcddongiamua" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdthanhtien" class="form-label">thanh tien</label>
                <input type="number" name="dcdthanhtien" id="dcdthanhtien" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdtrangthai" class="form-label">Trạng thái</label>
                <select name="dcdtrangthai" id="dcdtrangthai" class="form-control">
                    <option value="1">tra lai</option>
                    <option value="0">xoa</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ route('dcdAdmins.dcdcthoadon') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
</body>
</html>