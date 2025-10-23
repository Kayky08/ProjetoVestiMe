<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
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
            $item->qtd += $request->input('qtd', 1);
            $item->subtotal = $item->qtd * $item->valor;
            $item->save();
        } else {
            $cart->items()->create([
                'product_id' => $product->id,
                'qtd' => $request->input('qtd', 1),
                'valor' => $product->valor,
                'subtotal' => $product->valor * $request->input('qtd', 1),
            ]);
        }

        $cart->update(['total' => $cart->items()->sum('subtotal')]);

        return redirect('/carrinho')->with('success', 'Produto adicionado ao carrinho!');
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