<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AdminController;




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

Route::get('/', function () {
    return view('welcome');
});
Route::get('template', function () {
    return view('template.base');
});

/*Home*/ 
Route::get('beranda', [HomeController::class, 'showBeranda'] );
Route::get('ibuhamil', [HomeController::class, 'showIbuHamil'] );

/*Auth*/
Route::get('login', [AuthAdminController::class, 'showLogin'] );
Route::post('login', [AuthAdminController::class, 'loginProcess'] );
Route::get('logout', [AuthAdminController::class, 'logoutAdmin'] );

Route::get('registerweb', [AuthController::class, 'showRegister'] );
Route::get('forgotpass', [AuthController::class, 'showForgotpass'] );

/*Artikel*/
Route::resource('artikel', ArtikelController::class);


/*Admin*/
Route::get('admin', [AdminController::class, 'index'] );
Route::get('admin/create', [AdminController::class, 'create'] );
Route::post('admin', [AdminController::class, 'store'] );
Route::get('admin/{admin}',[AdminController::class, 'show']);
Route::get('admin/{admin}/edit',[AdminController::class, 'edit']);
Route::put('admin/{admin}', [AdminController::class, 'update']);
Route::delete('admin/{admin}', [AdminController::class, 'destroy']);

