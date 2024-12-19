<?php

use App\Http\Controllers\dcd_quantriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/admins/dcd-login',[dcd_quantriController::class,'dcdlogin'])->name('admins.dcdlogin');
route::post('/admins/dcd-login',[dcd_quantriController::class,'dcdloginSubmit'])->name('admins.dcdloginSubmit');
