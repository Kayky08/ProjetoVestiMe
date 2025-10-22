@extends('layouts.main')

@section('title', $product->descritivo)

@section('content')

<section class="flex justify-around items-center ">
    
    <div class="grid grid-cols-3 bg-[#EAEAEA] rounded-2xl m-10 p-5 w-300">
        <img class="w-100 col-span-2 m-10" src="{{$product->img}}" alt="">

        <form action="" method="GET" class="flex flex-col m-5">
            <p class="text-4xl">{{$product->descritivo}}</p>
            <p class="text-xl font-bold text-[#8A8A8A]">Código: {{$product->id}}</p>
            <p class="text-3xl font-bold mt-5 mb-5">R$ {{$product->valor}}</p>

            <div class="flex flex-col">
                <label for="quantudade">Quantidade</label>
                <select class="bg-white h-10 w-15 text-center rounded-full" name="" id="">
                    @for ($i = 1; $i < $product->qtd; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>

            <button type="submit" class="bg-[#7E9796] mt-50 p-3 rounded-full text-white font-bold text-center text-3xl" href="/carrinho/adicionar/{{$product->id}}">COMPRAR</button>
        </form>
    </div>
</section>

<section>
    <h2>SUSGESTÕES PARA VOCÊ</h2>

    <div class="flex justify-between items-center m-10 gap-6 overflow-x-auto h-150">
            @foreach ($products as $product)
                @if ($product->valor >= 100)
                <a href="/produto/{{$product->id}}">
                    <div class="p-5 hover:bg-[#D9D9D9] rounded-2xl transition delay-75 hover:scale-110">
                        <div class="relative w-65">
                            <img class="rounded" src="{{$product->img}}" alt="">
                            <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                        </div>

                        <div class="text-center">
                            <p class="m-3 text-2xl">{{$product->descritivo}}</p>
                            <p class="m-3 text-2xl font-bold">R$ {{$product->valor}}</p>
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        <div>
</section>

@endsection