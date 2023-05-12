<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes');
Route::get('/nuevosclientes', function(){return view('nuevocliente');});
Route::post('NuevosC', [App\Http\Controllers\ClienteController::class, 'registro']);
Route::get('EliminarC/{id}', [App\Http\Controllers\ClienteController::class, 'eliminar']);


Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos');
Route::get('/nuevosproductos', function(){return view('nuevoproducto');});
Route::post('NuevosP', [App\Http\Controllers\ProductoController::class, 'registro']);
Route::get('EliminarP/{id}', [App\Http\Controllers\ProductoController::class, 'eliminar']);


Route::get('/facturas', [App\Http\Controllers\FacturaController::class, 'index'])->name('facturas');
Route::get('/nuevasfacts', function(){return view('crearfacturas');});
Route::post('NuevasF', [App\Http\Controllers\FacturaController::class, 'registro']);
Route::get('EliminarF/{id}', [App\Http\Controllers\FacturaController::class, 'eliminar']);

