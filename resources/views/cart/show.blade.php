@extends('layouts.main')

@section('title', 'Sacola de Compras')

@section('content')

<h1 class="text-[#7E9796] font-bold text-center text-5xl m-10">Meu Carrinho</h1>

@if($cart->items->count())
    <div class="lg:flex justify-center sm:grid sm:grid-cols-1 gap-5 m-10">
        <table class="text-center rounded-2xl bg-[#D9D9D9]">
            <tr class="bg-[#7E9796] rounded-2xl font-bold">
                <th class="p-3">Produto</th>
                <th class="p-3">Quantidade</th>
                <th class="p-3">Preço</th>
                <th class="p-3">Subtotal</th>
                <th class="p-3">Ação</th>
            </tr>
            @foreach($cart->items as $item)
                <tr class="p-5">
                    <td class="flex justify-center items-center font-bold lg:p-5 sm:p-10"><img class="rounded-2xl w-50 lg:m-3 sm:m-0" src="{{$item->product->img}}" alt="">{{ $item->product->descritivo }}</td>
                    <td>{{ $item->qtd }}</td>
                    <td class="p-3">R$ {{ number_format($item->valor, 2, ',', '.') }}</td>
                    <td class="p-3">R$ {{ number_format($item->subtotal, 2, ',', '.') }}</td>
                    <td class="p-3">
                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 p-3 rounded-4xl text-white font-bold" type="submit">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="bg-[#D9D9D9] h-125 p-10 rounded-3xl text-center">
            <h2 class="text-2xl font-bold m-3">Resumo do Pedido</h2>
            <h3 class="text-2xl">Total: R$ {{ number_format($cart->total, 2, ',', '.') }}</h3>

            <div class="flex flex-col justify-center items-center text-center mt-20">
                <a class="bg-[#7E9796] p-5 m-5 w-100 rounded-full text-2xl text-white font-bold" href="#">COMPRE AGORA</a>
                <a class="bg-[#7E9796] p-5 m-5 w-100 rounded-full text-2xl text-white font-bold" href="/">CONTINUAR COMPRANDO</a>
            </div>
        </div>
    </div>
@else
    <p>Seu carrinho está vazio.</p>
@endif

@endsection