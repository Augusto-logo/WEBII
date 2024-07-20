<?php

use App\Http\Controllers\PizzasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PizzasController::class, 'index']);

Route::get('/pizzas', [PizzasController::class, 'create']);
Route::post('/pizzas', [PizzasController::class, 'store']);

Route::get('/edit/{id}', [PizzasController::class, 'edit']);
Route::put('/update/{id}', [PizzasController::class, 'update']);

Route::delete('/pizzas/{id}', [PizzasController::class, 'destroy']);

