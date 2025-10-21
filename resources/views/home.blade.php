@extends('layouts.main')

@section('title','Home')

@section('content')

    <section class="mb-25">
        <img class="lg:w-full lg:h-full sm:w-1500" src="/imgs/h-slide1.png" alt="">
        <img src="" alt="">
        <img src="" alt="">

        <div class="flex justify-center">
            <div class="m-2 w-5 h-5 rounded-full bg-[#D9D9D9]"></div>
            <div class="m-2 w-5 h-5 rounded-full bg-[#D9D9D9]"></div>
            <div class="m-2 w-5 h-5 rounded-full bg-[#D9D9D9]"></div>
        </div>
    </section>

    <section class="mb-25">
        <h2></h2>

        <div class="lg:grid lg:grid-cols-2 sm:grid sm:grid-cols-1 sm:w-full sm:gap-0">
            <a class="relative" href="">
                <img class="w-full h-full" src="/imgs/exposicao.png" alt="Clássicos da Moda">
                <button class="absolute bottom-6 left-6 pt-3 pb-3 pl-5 pr-5 bg-[#7E9796] rounded-full text-2xl text-white" href="">Veja Mais</button>
            </a>

            <a class="relative" href="" >
                <img class="w-full h-full" src="/imgs/exposicao2.png" alt="Momentos Especiais">
                <button class="absolute bottom-6 left-6 pt-3 pb-3 pl-5 pr-5 bg-[#7E9796] rounded-full text-2xl text-white" href="">Veja Mais</button>
            </a>
        </div>
    </section>

    <section class="mb-25">
        <h3 class="text-3xl text-center font-bold m-10">OFERTAS</h3>

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

    <section class="mb-25">
        <h2 class="text-center m-10 sm:text-9xl lg:text-4xl">SEU ESTILO FALA MAIS ALTO</h2>

        <div class="lg:flex lg:h-190 bg-red-400 sm:grid sm:grid-cols-1 sm:w-full sm:gap-0">
            <img class="w-full h-full lg:h-200 p-0 m-0" src="/imgs/h-street.svg" alt="">
            <img class="w-full h-full lg:h-200 p-0 m-0" src="/imgs/h-luxo.svg" alt="">
            <img class="w-full h-full lg:h-200 p-0 m-0" src="/imgs/h-casual.svg" alt="">
        </div>
    </section>


@endsection