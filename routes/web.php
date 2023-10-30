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

// esta ruta  carga la vista del login como index.
Route::get('/', function () {
    return view('welcome');
});

// esta ruta carga la vista del login.
Route::view('login', 'welcome')->name('login')->middleware('guest');

// esta ruta es la que hace todo el proceso del login.
Route::post('auth', [UserController::class, 'loginUser']);

// esta ruta es la que cierra la sesion del usuario.
Route::get('cerrarSesion', [UserController::class, 'logout'])->middleware('auth');

// esta ruta lleva al panel de administración del proyecto.
Route::view('inicio', 'inicio/inicio')->middleware('auth');

//esta ruta es para registrar las datos del formulario propuestas.
Route::post('registrarPropuesta', [PropsalController::class, 'store'])->middleware('auth');

//esta ruta es para registrar las datos del formulario contactenos.
Route::post('registrarContactenos', [ContactController::class, 'store'])->middleware('auth');

//esta ruta es para listar todos los registros de contactenos, lo podra consumir un frotend como dice en el requerimiento de la prueba.
Route::get('contactenosLists', [ContactController::class, 'index'])->middleware('auth');

//esta ruta es para listar todos los registros de propuestas, lo podra consumir un frotend como dice en el requerimiento de la prueba.
Route::get('propuestasLists', [PropsalController::class, 'index'])->middleware('auth');