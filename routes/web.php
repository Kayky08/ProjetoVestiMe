<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductsController::class,'index']);
Route::get('/produtos',[ProductsController::class,'view']);
Route::get('/produto/{id}',[ProductsController::class, 'show']);

Route::view('/contato',"empresa.contato");
Route::view('/sobre',"empresa.sobre");

Route::view('/login',"auth.login");
Route::view('/cadastro',"auth.register");

Route::get('/carrinho', [CartController::class, 'show'])->name('cart.show');
Route::post('/carrinho/adicionar/{id}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/carrinho/remover/{id}', [CartController::class, 'remove'])->name('cart.remove');
