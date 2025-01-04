<?php

use App\Http\Controllers\dcd_quantriController;
use App\Http\Controllers\dcd_loaisanphamController;
use App\Http\Controllers\dcdsanphamController;
use App\Http\Controllers\dcdCTHOADONController;
use App\Http\Controllers\dcdKHACHHANGController;
use Illuminate\Support\Facades\Route;

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




Route::get('/dcdlogin/dcd-login', [dcd_quantriController::class, 'login'])->name('login');
Route::post('/dcdlogin/dcd-login', [dcd_quantriController::class, 'loginSubmit'])->name('login.submit');
Route::get('/dcdAdmins', function () {
    return view('dcdAdmins'); // Trang sau khi đăng nhập thành công
})->name('dcdAdmins');





# Admin Routes
Route::get('/dcdAdmins', function() {
    return view('dcdAdmins.index');
});

Route::get('/dcdAdmins/dcd-loai-san-pham', [dcd_loaisanphamController::class, 'dcdList'])->name('dcdAdmins.dcdloaisanpham');


Route::get('/dcdAdmins/dcd-loai-san-pham/dcd-Create', [dcd_loaisanphamController::class, 'dcdCreate'])->name('dcdAdmins.dcdloaisanpham.dcdCreate');
Route::post('/dcdAdmins/dcd-loai-san-pham/dcd-Create', [dcd_loaisanphamController::class, 'dcdCreateSubmit'])->name('dcdAdmins.dcdloaisanpham.dcdCreateSubmit');
// edit
Route::get('/dcdAdmins/dcdloaisanpham/{id}/dcdEdit', [dcd_loaisanphamController::class, 'dcdEdit'])->name('dcdAdmins.dcdloaisanpham.dcdEdit');
Route::post('/dcdAdmins/dcdloaisanpham/', [dcd_loaisanphamController::class, 'dcdEditSubmit'])->name('dcdAdmins.dcdloaisanpham.dcdEditSubmit');
// delete
Route::get('/dcdAdmins/dcdloaisanpham/dcdDelete/{id}', [dcd_loaisanphamController::class, 'dcdDelete'])->name('dcdAdmins.dcdloaisanpham.dcdDelete');


// san pham

Route::get('/dcdAdmins/dcd-san-pham', [dcdsanphamController::class, 'dcdlist'])->name('dcdAdmins.Dcdsanpham');

Route::get('/dcdAdmins/dcd-san-pham/dcd-create', [dcdsanphamController::class, 'dcdcreate'])->name('dcdAdmins.Dcdsanpham.dcdcreate');
Route::post('/dcdAdmins/dcd-san-pham/dcd-create', [dcdsanphamController::class, 'dcdcreateSubmit'])->name('dcdAdmins.Dcdsanpham.dcdcreateSubmit');

//hien thi sanpham
Route::get('/dcdAdmins/dcd-san-pham/dcd-Show', [dcdsanphamController::class, 'dcdShow'])->name('dcdAdmins.Dcdsanpham.dcdShow');


// ct hoa don
Route::get('/dcdAdmins/dcd-cthoadon', [dcdCTHOADONController::class, 'dcdListCTHOADON'])->name('dcdAdmins.dcdcthoadon');

Route::get('/dcdAdmins/dcd-cthoadon/dcd-createcthoadon', [dcdCTHOADONController::class, 'dcdCreateCTHOADON'])->name('dcdAdmins.dcdcthoadon.dcdCreateCTHOADON');
Route::post('/dcdAdmins/dcd-cthoadon/dcd-createcthoadon', [dcdCTHOADONController::class, 'dcdCreateCTHOADONSubmit'])->name('dcdAdmins.dcdcthoadon.dcdcreateCTHOADONSubmit');
// xem CTHOADON
Route::get('/dcdAdmins/dcd-cthoadon/dcd-showcthoadon', [dcdCTHOADONController::class, 'dcdShowCTHOADON'])->name('dcdAdmins.dcdcthoadon.dcdShowCTHOADON');


//khachhang
Route::get('/dcdAdmins/dcd-khachhang', [dcdKHACHHANGController::class, 'dcdListKHACHHANG'])->name('dcdAdmins.dcdkhachhang');

Route::get('/dcdAdmins/dcd-khachhang/dcd-createkhachhang', [dcdKHACHHANGController::class, 'dcdCreateKHACHHANG'])->name('dcdAdmins.dcdkhachhang.dcdCreateKHACHHANG');
Route::post('/dcdAdmins/dcd-khachhang/dcd-createkhachhang', [dcdKHACHHANGController::class, 'dcdCreateKHACHHANGSubmit'])->name('dcdAdmins.dcdkhachhang.dcdcreateKHACHHANGSubmit');
// xem KHACHHANG
Route::get('/dcdAdmins/dcd-cthoadon/dcd-showkhachhang', [dcdKHACHHANGController::class, 'dcdShowKHACHHANG'])->name('dcdAdmins.dcdkhachhang.dcdShowKHACHHANG');