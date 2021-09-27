<?php
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LaravelController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class);
Route::get('/layout', [SistemaController::class, 'layout']);
Route::get('/categorias/bladevistas', [CategoriasController::class, 'bladevistas']);
Route::get('/categorias/control', [CategoriasController::class, 'control']);
Route::get('/categorias/instalacion', [CategoriasController::class, 'instalacion']);
Route::get('/categorias/vistas', [CategoriasController::class, 'vistas']);
Route::get('/categorias/rutas', [CategoriasController::class, 'rutas']);
Route::get('/categorias/tema', [CategoriasController::class, 'tema']);

   
