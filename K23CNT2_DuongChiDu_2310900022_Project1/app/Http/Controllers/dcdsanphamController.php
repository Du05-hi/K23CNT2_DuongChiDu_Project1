<?php
namespace App\Http\Controllers;
use App\Models\dcdsanpham;
use Illuminate\Http\Request;
class dcdsanphamController extends Controller
{
    // Hiển thị danh sách sản phẩm
    public function dcdlist()
    {
        $dcdsanpham = dcdsanpham::all(); // Lấy tất cả sản phẩm
        return view('dcdAdmins.Dcdsanpham.dcdlist',compact('dcdsanpham'));
    }
     // Hiển thị form thêm sản phẩm
     public function dcdcreate()
     {
         return view('dcdAdmins.Dcdsanpham.dcdcreate');
     }
 
     // Xử lý lưu sản phẩm mới
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'dcdmasanpham' => 'required|string|unique:dcdsanphams|max:255',
             'dcdtensanpham' => 'required|string|max:255',
             'dcdhinhanh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'dcdsoluong' => 'required|integer|min:0',
             'dcddongia' => 'required|numeric|min:0',
             'dcdmaloai' => 'required|integer',
             'dcdtrangthai' => 'required|boolean',
         ]);
 
         if ($request->hasFile('dcdhinhanh')) {
             $validatedData['dcdhinhanh'] = $request->file('dcdhinhanh')->store('images', 'public');
         }
 
         dcdsanpham::create($validatedData);
 
         return redirect()->route('sanpham.list')->with('success', 'Thêm sản phẩm thành công!');
     }
     public function show($id)
     {
         // Lấy thông tin chi tiết sản phẩm theo ID
         $sanPham = dcdsanpham::findOrFail($id); // Sử dụng findOrFail để đảm bảo sản phẩm tồn tại
 
         // Trả về view chi tiết sản phẩm
         return view('dcdAdmins.Dcdsanpham.dcdShow');
     }
}