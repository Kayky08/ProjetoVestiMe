@extends('layouts.main')

@section('title','home')

@section('content')

    <section>
        <img class="w-full" src="/imgs/h-slide1.png" alt="">
        <img src="" alt="">
        <img src="" alt="">

        <div class="flex justify-center">
            <div class="m-2 w-5 h-5 rounded-full bg-[#D9D9D9]"></div>
            <div class="m-2 w-5 h-5 rounded-full bg-[#D9D9D9]"></div>
            <div class="m-2 w-5 h-5 rounded-full bg-[#D9D9D9]"></div>
        </div>
    </section>

    <section>
        <h2 class="text-3xl text-center font-bold m-10">CATEGORIAS</h2>

        <div class="flex justify-between m-10 text-center">
            <div>
                <a class="hover:text-red-400" href="">
                    <img src="/imgs/h-perfumes.png" alt="">
                    <p>Perfumes</p>
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

    <section>
        <h3 class="text-3xl text-center font-bold m-10">OFERTAS</h3>

        <div class="flex justify-between m-10">
            <a href="">
                <div>
                    <div class="relative w-65">
                        <img src="/imgs/perfume1.svg" alt="">
                        <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                    </div>

                    <div class="text-center">
                        <p class="m-3 text-2xl">Nome do Produto</p>
                        <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                    </div>
                </div>
            </a>
            
            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>

            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>

            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>
            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-3xl text-center font-bold m-10">MAIS VENDIDOS</h3>

        <div class="flex justify-between m-10">
            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>

            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>

            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>

            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>
            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-3xl text-center font-bold m-10">SUSGESTÕES PRA VOCê</h3>

        <div class="flex justify-between m-10">
            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>

            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>

            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>

            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>
            <div>
                <div class="relative w-65">
                    <img src="/imgs/perfume1.svg" alt="">
                    <img class="absolute right-3 top-8 -translate-y-1/2" src="/imgs/sacola.svg" alt="">
                </div>

                <div class="text-center">
                    <p class="m-3 text-2xl">Nome do Produto</p>
                    <p class="m-3 text-2xl font-bold">R$ 50,00</p>
                </div>
            </div>
        </div>
    </section>
@endsection