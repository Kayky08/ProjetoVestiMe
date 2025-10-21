<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();

        return view('home', ['products'=>$products]);
    }

    public function view(){
        $products = Products::all();

        return view('produtos.view', ['products'=>$products]);
    }

    public function show($id){
        $products = Products::all();
        $product = Products::findOrFail($id);

        return view('produtos.show', ['product' => $product, 'products' => $products]);
    }
}
