<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TampilanIndex;
use App\Http\Livewire\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
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

Route::get('/',[TampilanIndex::class,'render'])->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/Logout',LogoutController::class)->name('logout');
    // Route::get('/rekber',LogoutController)
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/Login',[AuthController::class,'login'])->name('login');
    Route::get('/Daftar',[AuthController::class,'register'])->name('register');
    //Proses Regist , login dll
    Route::POST('/Daftar', [UserController::class,'store'])->name('register.proses');
    Route::POST('/Login', [LoginController::class,'proses'])->name('login.proses');
});