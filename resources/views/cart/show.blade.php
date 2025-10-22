@extends('layouts.main')

@section('title', 'Sacola de Compras')

@section('content')

<h1>Meu Carrinho</h1>

@if($cart->items->count())
    <table>
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Subtotal</th>
            <th>Ação</th>
        </tr>
        @foreach($cart->items as $item)
            <tr>
                <td>{{ $item->product->descricao }}</td>
                <td>{{ $item->quantidade }}</td>
                <td>R$ {{ number_format($item->valor, 2, ',', '.') }}</td>
                <td>R$ {{ number_format($item->subtotal, 2, ',', '.') }}</td>
                <td>
                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remover</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <h3>Total: R$ {{ number_format($cart->total, 2, ',', '.') }}</h3>
@else
    <p>Seu carrinho está vazio.</p>
@endif

@endsection