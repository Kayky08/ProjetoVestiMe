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

        <div class="lg:flex lg:jutify-around sm:grid sm:grid-cols-1 sm:w-full sm:gap-0 sm:bg-red-400">
            <div>
                <img class="w-full h-full" src="/imgs/exposicao.png" alt="Clássicos da Moda">

                <p>Momentos Especiais</p>
                <a href="">Veja Mais</a>
            </div>

            <div>
                <img class="w-full h-full" src="/imgs/exposicao2.png" alt="Momentos Especiais">

                <p>Momentos Especiais</p>
                <a href="">Veja Mais</a>
            </div>
        </div>
    </section>

    <section class="mb-25">
        
    </section>

    <section class="mb-25">
        <h2 class="text-center m-10 sm:text-9xl lg:text-4xl">SEU ESTILO FALA MAIS ALTO</h2>

        <div class="lg:flex lg:w-full bg-red-400 sm:grid sm:grid-cols-1 sm:w-full sm:gap-0">
            <img class="w-full h-full lg:h-250 p-0 m-0" src="/imgs/h-street.svg" alt="">
            <img class="w-full h-full lg:h-250 p-0 m-0" src="/imgs/h-luxo.svg" alt="">
            <img class="w-full h-full lg:h-250 p-0 m-0" src="/imgs/h-casual.svg" alt="">
        </div>
    </section>


@endsection