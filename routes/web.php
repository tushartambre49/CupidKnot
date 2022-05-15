<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/',[LoginController::class,'index'])->name('loginpage');
Route::get('/admin',[AdminController::class,'index'])->name('alogin');
Route::post('/adminlogin',[AdminController::class,'login'])->name('checklogin');
Route::get('/adminlogifilterage/{status}',[AdminController::class,'filter'])->name('agefilter');
Route::get('/admindashboard',[AdminController::class,'dashboard'])->name('admindashboard');
Route::post('/login',[LoginController::class,'login'])->name('logincustom');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/alogout',[AdminController::class,'logout'])->name('alogout');
Route::get('/partnerpre',[LoginController::class,'partnerpre'])->name('partner');
Route::get('/userpro/{email}',[UserController::class,'userpro'])->name('userprofile');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::get('/redirect',[RegisterController::class,'redirectToGoogle'])->name('redirectToGoogle');
Route::get('/GoogleLogin',[RegisterController::class,'GoogleLogin'])->name('GoogleLogin');
Route::get('/registerprocess/{userId}',[RegisterController::class,'registerprocess'])->name('registerprocess');
Route::post('/saveuser',[RegisterController::class,'saveUser'])->name('saveUser');
Route::post('/saveguser',[RegisterController::class,'savegUser'])->name('registergUser');
Route::get('/registerguser/{name}/{email}',[RegisterController::class,'guser'])->name('guserRegistration');
