<?php

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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.index');
//    return view('welcome');
});

Route::get('/list',[\App\Http\Controllers\ModelController::class,'list'])->name('list');
Route::get('/form',[\App\Http\Controllers\ModelController::class,'form'])->name('form');
Route::get('/gallery',[\App\Http\Controllers\ModelController::class,'gallery'])->name('gallery');



//Authentication Route
Route::get( 'login_form',[\App\Http\Controllers\LoginController::class,'index'])->name('login.form');
Route::get( 'reg_form',[\App\Http\Controllers\RegistrationController::class,'index'])->name('reg.form');
Route::post( 'reg_submit',[\App\Http\Controllers\RegistrationController::class,'register'])->name('reg.submit');
Route::post( 'custom_login',[\App\Http\Controllers\LoginController::class,'login'])->name('login.submit');
Route::get('custom_logout',[\App\Http\Controllers\LoginController::class,'logout'])->name('login.logout');


Route::get('/sms',[\App\Http\Controllers\SmsController::class,'index'])->name('sms');



