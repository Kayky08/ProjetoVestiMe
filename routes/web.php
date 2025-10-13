<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductsController::class,'index']);

Route::view('/contato',"empresa.contato");
Route::view('/sobre',"empresa.sobre");
Route::view('/servicos',"empresa.servicos");
