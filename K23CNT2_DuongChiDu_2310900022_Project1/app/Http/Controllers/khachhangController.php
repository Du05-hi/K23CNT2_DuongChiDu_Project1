<?php
namespace App\Http\Controllers;
use App\Models\dcdKHACHHANG;
use Illuminate\Http\Request;
class khachhangController extends Controller
{
    public function show($id)
    {
        // Lấy thông tin sản phẩm từ DB
        $Khachhang = dcdkhachhang::findOrFail($id);
        // Trả về view chi tiết sản phẩm
        return view('dcdkhachhangList', compact('Khachhang'));
    }
}