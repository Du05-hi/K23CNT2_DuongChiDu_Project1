<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dcd_quantriController extends Controller
{
    //

    // login
    public function dcdlogin(){
        return view('dcdlogin.dcd-login');
    }
    public function dcdloginSubmit(Request $request){
        return view('dcdlogin.dcd-login');
    }
}
