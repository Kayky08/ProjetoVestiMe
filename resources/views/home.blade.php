@extends('layouts.main')

@section('title','Home')

@section('content')

    <section class="mb-25">
        <img class="w-full" src="/imgs/h-slide1.png" alt="">
        <img src="" alt="">
        <img src="" alt="">

        <div class="flex justify-center">
            <div class="m-2 w-5 h-5 rounded-full bg-[#D9D9D9]"></div>
            <div class="m-2 w-5 h-5 rounded-full bg-[#D9D9D9]"></div>
            <div class="m-2 w-5 h-5 rounded-full bg-[#D9D9D9]"></div>
        </div>
    </section>

    <section class="mb-25">
        <h2 class="text-3xl text-center font-bold m-10">CATEGORIAS</h2>

        <div class="flex justify-between m-10 text-center">
            <div>
                <a class="relative group overflow-hidden" href="">
                    <img class=" w-full h-full object-cover" src="/imgs/h-perfumes.png" alt="">

                    <div class="absolute inset-0 bg-black/75 flex items-center justify-center
              text-white text-xl font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300">Perfumes</div>
                </a>
            </div>

            <div>
                <a href="">
                    <img src="/imgs/h-joias.png" alt="">
                    <p>Jóias</p>
                </a>
            </div>

            <div>
                <a href="">
                    <img src="/imgs/h-lingeries.png" alt="">
                    <p>Perfumes</p>
                </a>
            </div>
        </div>
    </section>

    <section class="mb-25">
        <h3 class="text-3xl text-center font-bold m-10">OFERTAS</h3>

        <div class="flex justify-between m-10 gap-6">
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

    <section class="mb-25">
        <h3 class="text-3xl text-center font-bold m-10">MAIS VENDIDOS</h3>

        <div class="flex justify-between m-10 gap-6">
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

    <section class="mb-25">
        <h3 class="text-3xl text-center font-bold m-10">SUSGESTÕES PRA VOCÊ</h3>

        <div class="flex justify-between m-10 gap-6">
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