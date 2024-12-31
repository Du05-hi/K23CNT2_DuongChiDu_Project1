<?php

use App\Http\Controllers\dcd_quantriController;
use App\Http\Controllers\dcd_loaisanphamController;
use App\Http\Controllers\dcdsanphamController;
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

Route::get('/', function () {
    return view('welcome');
});


route::get('/admins/dcd-login',[dcd_quantriController::class,'dcdlogin'])->name('admins.dcdlogin');
route::post('/admins/dcd-login',[dcd_quantriController::class,'dcdloginSubmit'])->name('admins.dcdloginSubmit');


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

// Route xem chi tiết sản phẩm
Route::get('/dcdAdmins/dcd-san-pham/{id}', [dcdsanphamControllerr::class, 'dcdShow'])->name('dcdAdmins.Dcdsanpham.dcdShow');