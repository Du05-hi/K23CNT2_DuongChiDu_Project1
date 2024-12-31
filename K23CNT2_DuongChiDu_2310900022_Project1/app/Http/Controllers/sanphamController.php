<?php
namespace App\Http\Controllers;
use App\Models\dcdsanpham;
use Illuminate\Http\Request;
class sanphamController extends Controller
{
    public function show($id)
    {
        // Lấy thông tin sản phẩm từ DB
        $sanPham = dcdsanpham::findOrFail($id);
        // Trả về view chi tiết sản phẩm
        return view('dcdsanphamList', compact('sanPham'));
    }
}