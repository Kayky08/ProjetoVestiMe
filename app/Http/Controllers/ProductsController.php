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

    public function show(){
        $products = Products::all();

        return view('produtos.show', ['products'=>$products]);
    }

    public function view($id){
        $products = Products::all();
        $product = Products::findOrFail($id);

        
    }
}
