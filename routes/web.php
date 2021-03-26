<?php

use App\Http\Controllers\GoogleController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\TaxisController;
use App\Http\Middleware\CheckMatriculacion;
use App\Http\Controllers\CapitanesController;
use App\Http\Controllers\tb_clienteController;
use App\Http\Controllers\tb_mascotaController;
use App\Http\Controllers\tb_reservaController;
use App\Http\Controllers\tb_habitacionController;
use App\Http\Controllers\tb_dietaController;
use App\Http\Controllers\caninisController;
use App\Http\Controllers\HighchartController;
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

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);




//Route::get("/saldo/{proveedor_id}/{cantidad}","ProveedoresController@cambiarSaldo");

Route::get("/proveedores/index2",[ProveedoresController::class,"index2"]);
Route::get("/proveedores/pdf",[ProveedoresController::class,"pdf"]);
Route::resource("proveedores","ProveedoresController");
Route::resource("taxis","TaxisController");
Route::resource("capitanes","CapitanesController");

//Proyecto
Route::get('/chart', [HighchartController::class, 'handleChart']);
Route::get("/tb_clientes/pdf",[tb_clienteController::class,"pdf"]);
Route::get("/tb_mascotas/pdf",[tb_mascotaController::class,"pdf"]);
Route::get("/tb_reservas/pdf",[tb_reservaController::class,"pdf"]);
Route::get("/tb_habitaciones/pdf",[tb_habitacionController::class,"pdf"]);
Route::get("/tb_dietas/pdf",[tb_dietaController::class,"pdf"]);
Route::resource("tb_clientes","tb_clienteController");
Route::resource("tb_mascotas","tb_mascotaController");
Route::resource("tb_reservas","tb_reservaController");
Route::resource("tb_habitaciones","tb_habitacionController");
Route::resource("tb_dietas","tb_dietaController");
Route::resource("caninis","caninisController");





Route::get("/",[HighchartController::class,"handleChart"]);
/*Route::get('/', function () {
    return view('welcome'); 
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

