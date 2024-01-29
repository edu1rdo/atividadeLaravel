<?php

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

Route::get('/cadastrar',[\app\http\Controllers\cadastrarUsuario::class,'index']);
Route::post('/cadastrar/salvar',[\app.Http\Controllers\cadastrarUsuario::class,'store']);