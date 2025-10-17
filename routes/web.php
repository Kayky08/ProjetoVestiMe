<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductsController::class,'index']);
Route::get('/produtos',[ProductsController::class,'show']);

Route::view('/contato',"empresa.contato");
Route::view('/sobre',"empresa.sobre");
