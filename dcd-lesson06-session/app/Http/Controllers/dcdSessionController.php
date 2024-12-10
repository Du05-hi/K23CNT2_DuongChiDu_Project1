<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class dcdSessionController extends controller

{
    public function dcdGetSessionData(Request $_request)
    {
        if($request->session()->has('K23CNT2_dcd'))
        {   
        echo $request->session()->get('K23CNT2_dcd');
        }
        else
        {
            echo "<h2> Không có dữ liệu trong session </h2>";
        }
    }
    public function dcdstoreSessionData(Request $request)
    {
        $request->session()->put('K23CNT2_dcd','K23CNT2_DCD_2310900022');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";
    }
    public function dcddeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT2_dcd');
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    }
}
