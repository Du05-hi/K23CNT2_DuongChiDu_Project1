<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dcdAccountController extends controller
{
    public function dcdlogin(){
        return view ('dcd-login');
    }
    public function dcdloginSubmit(request $_request)
    {
        $validation =$_request->validate([
            'dcdemail'=> 'required|email',
            'dcdpass'=> 'required|min:6'
        ]);
        $dcdemail = $_request->input('dcdemail');
        $dcdpass = $_request->input ('dcdpass');

        $dcdloginsession=[
            'dcdemail'=>$dcdemail,
            'dcdpass'=>$dcdpass,
        ];

        $dcd_jison = jison_encode($dcdloginsession);
        
        if($dcdemail=="dcd@gamil.com" && $dcdpass=="123456a@")
        {
            $_request->session()->put('K23CNT2-duongchidu',$dcdemail);
            return redirect('/');
        }

        return redirect()->back()->with()('dcd-error','loi dang nhap');
    }
}