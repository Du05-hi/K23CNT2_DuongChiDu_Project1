<?php
namespace App\Http\Controllers;
use App\Models\dcdKHACHHANG;
use Illuminate\Http\Request;
class dcdKHACHHANGController extends Controller
{
    // Hiển thị danh sách sản phẩm
    public function dcdListKHACHHANG()
    {
        $dcdkhachhang = dcdkhachhang::all(); // Lấy tất cả sản phẩm
        return view('dcdAdmins.dcdkhachhang.dcdListKHACHHANG',compact('dcdkhachhang'));
    }
     // Hiển thị form thêm sản phẩm
     public function dcdCreateKHACHHANG()
     {
         return view('dcdAdmins.dcdkhachhang.dcdCreateKHACHHANG');
     }
 
     // Xử lý lưu sản phẩm mới
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'id'=>'required|string|unique:dcdcthoadon|max:255',
             'dcdmakhachhang' => 'required|string|max:255',
             'dcdhovatenkhachhang' => 'required|string|max:255',
             'dcdemail' => 'required|integer|min:0',
             'dcdmatkhau' => 'required|numeric|min:0',
             'dcddienthoai' => 'required|integer',
             'dcddiachi'=>'required|string|max:255',
             'dcdngaydangki'=>'required|string',
             'dcdtrangthai' => 'required|boolean',
         ]);
 
       
         dcdkhachhang::create($validatedData);
 
         return redirect()->route('khachhang.list')->with('success', 'Thêm sản phẩm thành công!');
     }
     public function show($id)
     {
         // Lấy thông tin chi tiết sản phẩm theo ID
         $Khachhang = dcdkhachhang::findOrFail($id); // Sử dụng findOrFail để đảm bảo sản phẩm tồn tại
 
         // Trả về view chi tiết sản phẩm
         return view('dcdAdmins.dcdkhachhang.dcdShowKHACHHANG');
     }
}