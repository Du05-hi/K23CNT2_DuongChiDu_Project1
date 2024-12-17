<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SinhVien;
class dcdsinhvienController extends Controller
{
// CRUD
public function dcdlist()
{
// Lấy toàn bộ dữ liệu trong bảng sinh viên
$dcdsinhViens = dcdSinhVien::all();
return view('dcdsinhvien.index', ['dcdsinhViens'=>$dcdsinhviens]);
}
}