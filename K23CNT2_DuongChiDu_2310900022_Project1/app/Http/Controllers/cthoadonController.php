<?php
namespace App\Http\Controllers;
use App\Models\dcdCTHOADON;
use Illuminate\Http\Request;
class cthoadonController extends Controller
{
    public function show($id)
    {
        // Lấy thông tin sản phẩm từ DB
        $Cthoadon = dcdcthoadon::findOrFail($id);
        // Trả về view chi tiết sản phẩm
        return view('dcdcthoadonList', compact('Cthoadon'));
    }
}