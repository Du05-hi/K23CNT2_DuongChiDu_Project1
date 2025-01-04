<?php
namespace App\Http\Controllers;
use App\Models\dcdCTHOADON;
use Illuminate\Http\Request;
class dcdCTHOADONController extends Controller
{
    // Hiển thị danh sách sản phẩm
    public function dcdListCTHOADON()
    {
        $dcdcthoadon = dcdcthoadon::all(); // Lấy tất cả sản phẩm
        return view('dcdAdmins.dcdcthoadon.dcdListCTHOADON',compact('dcdcthoadon'));
    }
     // Hiển thị form thêm sản phẩm
     public function dcdCreateCTHOADON()
     {
         return view('dcdAdmins.dcdcthoadon.dcdCreateCTHOADON');
     }
 
     // Xử lý lưu sản phẩm mới
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'id'=>'required|string|unique:dcdcthoadon|max:255',
             'dcdhoadonid' => 'required|string|max:255',
             'dcdsanphamid' => 'required|string|max:255',
             'dcdsoluongmua' => 'required|integer|min:0',
             'dcddongiamua' => 'required|numeric|min:0',
             'dcdthanhtien' => 'required|integer',
             'dcdtrangthai' => 'required|boolean',
         ]);
 
       
         dcdcthoadon::create($validatedData);
 
         return redirect()->route('cthoadon.list')->with('success', 'Thêm sản phẩm thành công!');
     }
     public function show($id)
     {
         // Lấy thông tin chi tiết sản phẩm theo ID
         $Cthoadon = dcdcthoadon::findOrFail($id); // Sử dụng findOrFail để đảm bảo sản phẩm tồn tại
 
         // Trả về view chi tiết sản phẩm
         return view('dcdAdmins.dcdcthoadon.dcdShowCTHOADON');
     }
}