<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;

//um Usuario, inicialmente, tem um endereço
Route::get('/users', [UserController::class, 'index']);
//Buscar por um usuario pelo ID 
Route::get('/users/{id}', [UserController::class, 'findOne']);
//Incluir um novo Usuario
Route::post('/users',[UserController::class, 'insert']);

Route::get('/addresses', [AddressController::class, 'index']);
//Buscar por um endereço pelo ID
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);
//Incluir um novo Endereço
Route::post('/addresses', [AddressController::class, 'insert']);