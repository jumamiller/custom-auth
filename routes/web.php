<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\StaffRegisterController;
use App\Http\Controllers\Auth\Admin\StaffLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\Admin\StaffLogoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return view('home');
});
Route::get('/home',[HomeController::class,'landing_page']);
Route::get('/staff_login',  [StaffLoginController::class,'show_login_form']);
Route::post('/staff_login', [StaffLoginController::class,'staff_login'])->name('staff_login');

Route::get('staff_register',   [StaffRegisterController::class,'show_registration_form']);
Route::post('staff_register',  [StaffRegisterController::class,'store'])->name('staff_register');
Route::get('/staffs',   [StaffRegisterController::class,'index']);
Route::post('/logout',  [StaffLogoutController::class,'logout'])->name('logout');
