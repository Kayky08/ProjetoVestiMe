<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Retorna o carrinho do usuário logado ou da sessão
    private function getCart()
    {
        if (Auth::check()) {
            return Cart::firstOrCreate(['user_id' => Auth::id()]);
        }

        $sessionId = session()->getId();
        return Cart::firstOrCreate(['session_id' => $sessionId]);
    }

    // Adicionar item
    public function add(Request $request, $productId)
    {
        $cart = $this->getCart();
        $product = Products::findOrFail($productId);

        $item = $cart->items()->where('product_id', $productId)->first();

        if ($item) {
            $item->quantity += $request->input('quantity', 1);
            $item->subtotal = $item->quantity * $item->price;
            $item->save();
        } else {
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => $request->input('quantity', 1),
                'price' => $product->price,
                'subtotal' => $product->price * $request->input('quantity', 1),
            ]);
        }

        $cart->update(['total' => $cart->items()->sum('subtotal')]);

        return back()->with('success', 'Produto adicionado ao carrinho!');
    }

    // Exibir carrinho
    public function show()
    {
        $cart = $this->getCart();
        return view('cart.show', compact('cart'));
    }

    // Remover item
    public function remove($itemId)
    {
        $cart = $this->getCart();
        $item = $cart->items()->findOrFail($itemId);
        $item->delete();

        $cart->update(['total' => $cart->items()->sum('subtotal')]);

        return back()->with('success', 'Item removido!');
    }
}