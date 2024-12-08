<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];

    public function showform(){
        $this->data['title']='thong tin nguoi dung ';
        return view ('showform', $this ->data);
    }
}
