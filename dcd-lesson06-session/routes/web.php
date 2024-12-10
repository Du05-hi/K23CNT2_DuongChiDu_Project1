<?php

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
#test session
Route::get('dcd-session/get', [dcdSessionController::class,'dcdGetSessionData'])->name('dcdsession.get');
Route::get('dcd-session/get', [dcdSessionController::class,'dcdstoreSessionData'])->name('dcdsession.get');
Route::get('dcd-session/get', [dcdSessionController::class,'dcddeleteSessionData'])->name('dcdsession.get');

#account
Route::get('dcd-login', [dcdAccountController::class,'dcdlogin'])->name('dcdaccount.dcdlogin');
Route::post('dcd-login', [dcdAccountController::class,'dcdloginsubmit'])->name('dcdaccount.dcdloginsubmit');