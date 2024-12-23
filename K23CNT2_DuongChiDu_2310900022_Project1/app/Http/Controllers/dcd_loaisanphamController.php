<?php

namespace App\Http\Controllers;

use App\Models\dcdloaisanpham;
use Illuminate\Http\Request;

class dcd_loaisanphamController extends Controller
{
    // Admin : CRUD

    // List
    public function dcdList()
    {
        $dcdloaisanpham = dcdloaisanpham::all();
        return view('dcdAdmins.dcdloaisanpham.dcdList', ['dcdloaisanpham' => $dcdloaisanpham]);
    }
    // create
public function dcdCreate()
{
    return view('dcdAdmins.dcdloaisanpham.dcdCreate');

}
// create submit
public function dcdCreateSubmit(REQUEST $REQUEST)
{
    $dcdloaisanpham = new dcdloaisanpham;
    $dcdloaisanpham->$dcdmaloai = $REQUEST->dcdmaloai;
    $dcdloaisanpham->$dcdtenloai = $REQUEST->dcdtenloai;
    $dcdloaisanpham->$dcdtrangthai = $REQUEST->dcdtrangthai;
    $dcdloaisanpham->save();
    return redirect('dcdAdmins.dcdloaisanpham');

}
    // create
    public function dcdEdit($id)
    {
        $item = dcdloaisanpham::where('dcdmaloai', $id)->first(); 
        return view('dcdAdmins.dcdloaisanpham.dcdEdit', compact('item')); 
    }

    // delete
    public function dcdDelete($id)
    {
        $dcdloaisanpham = dcdloaisanpham::find($id);
        $dcdloaisanpham->delete();
        return redirect()->route('dcdAdmins.dcdloaisanpham');
    }
}