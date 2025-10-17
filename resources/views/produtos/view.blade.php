@extends('layout.main')

@section('title', $product->descritivo)

@section('content')

<section>
    <div>
        <img src="" alt="">

        <p></p>
        <p>Código:</p>
        <p></p>

        <select name="" id="">

        </select>

        <button>Comprar</button>
    </div>
</section>

<section>
    <h2>SUSGESTÕES PARA VOCÊ</h2>

    <div class="flex justify-between items-center m-10 gap-6 overflow-x-auto h-150">
            @foreach ($products as $product)
                @if ($product->valor >= 100)
                <a href="">
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