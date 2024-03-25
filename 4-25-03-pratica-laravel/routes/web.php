<?php

use App\Http\Controllers\VeiculosController;
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

Route::get('/veiculos', [VeiculosController::class, 'showAll']);
Route::get('/veiculos/novo', [VeiculosController::class, 'compose']);
Route::post('/veiculos/novo', [VeiculosController::class, 'store']);