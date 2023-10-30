<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PropsalController;
use App\Http\Controllers\UserController;
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

Route::view('login', 'welcome')->name('login')->middleware('guest');
Route::post('auth', [UserController::class, 'loginUser']);
Route::get('cerrarSesion', [UserController::class, 'logout'])->middleware('auth');
Route::view('inicio', 'inicio/inicio')->middleware('auth');

Route::post('registrarPropuesta', [PropsalController::class, 'store'])->middleware('auth');
Route::post('registrarContactenos', [ContactController::class, 'store'])->middleware('auth');