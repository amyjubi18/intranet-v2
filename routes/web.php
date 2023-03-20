<?php

use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\ListadoController;
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
    return view('cargar');
});
Route::post('EnvioDatos',[DocumentosController::class,'Insertar']);
Route::get('listado', [ListadoController::class, 'index']);


/* Route::get('/categorias', 'CategoriasController@index') */


?>
