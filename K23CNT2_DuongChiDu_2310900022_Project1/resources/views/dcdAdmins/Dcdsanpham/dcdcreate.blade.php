<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Thêm Sản Phẩm</h1>
        <form action="{{ route('dcdAdmins.Dcdsanpham.dcdcreateSubmit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="dcdmasanpham" class="form-label">Mã sản phẩm</label>
                <input type="text" name="dcdmasanpham" id="dcdmasanpham" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdtensanpham" class="form-label">Tên sản phẩm</label>
                <input type="text" name="dcdtensanpham" id="dcdtensanpham" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdhinhanh" class="form-label">Hình ảnh</label>
                <input type="file" name="dcdhinhanh" id="dcdhinhanh" class="form-control">
            </div>
            <div class="mb-3">
                <label for="dcdsoluong" class="form-label">Số lượng</label>
                <input type="number" name="dcdsoluong" id="dcdsoluong" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcddongia" class="form-label">Đơn giá</label>
                <input type="number" step="0.01" name="dcddongia" id="dcddongia" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdmaloai" class="form-label">Mã loại</label>
                <input type="number" name="dcdmaloai" id="dcdmaloai" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dcdtrangthai" class="form-label">Trạng thái</label>
                <select name="dcdtrangthai" id="dcdtrangthai" class="form-control">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Vô hiệu</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ route('dcdAdmins.Dcdsanpham') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
</body>
</html>