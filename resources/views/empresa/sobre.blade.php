@extends('layouts.main')

@section('title', 'Sobre')

@section('content')

<section class="flex flex-col justify-center items-center m-25">
    <h1 class="text-[#7E9796] font-bold text-center text-5xl m-10">SOBRE</h1>

    <div class=" bg-[#D9D9D9] w-300 p-10 rounded-2xl">
        <div class="flex">
            <img class="m-5" src="/imgs/missao.png" alt="">
            
            <div class="flex flex-col justify-center items-center">
                <h2 class="font-bold text-3xl m-5">MISSAO</h2>
                <p class="text-justify text-xl">Oferecer moda acessível, atual e de qualidade, ajudando cada pessoa a expressar sua autenticidade através do estilo. Na Vesti.me, acreditamos que se vestir bem é uma forma de confiança e liberdade.</p>
            </div>
        </div>

        <div class="flex">
            <div class="flex flex-col justify-center items-center">
                <h2 class="font-bold text-3xl m-5">VALORES</h2>
                <p class="text-justify text-xl">Ser reconhecida como uma marca de moda referência em estilo e experiência do cliente, conectando tendências e conforto em cada peça, e tornando-se uma escolha natural para quem busca se destacar com atitude.</p>
            </div>
    
            <img class="m-5" src="/imgs/visao.png" alt="">
        </div>

        <div class="flex">
            <img class="m-5" src="/imgs/valores.png" alt="">
            <div class="flex flex-col justify-center items-center">
                <h2 class="font-bold text-3xl m-5">VISAO</h2>

                <ul class="text-xl text-justify">
                    <li><p><span class="font-bold">Autenticidade:</span> Celebramos o estilo único de cada cliente.</p></li>
                    <li><p><span class="font-bold">Qualidade:</span> Priorizamos materiais, acabamentos e conforto em cada produto.</p></li>
                    <li><p><span class="font-bold">Acessibilidade:</span> Moda com preço justo, sem abrir mão da elegância.</p></li>
                    <li><p><span class="font-bold">Sustentabilidade:</span> Valorizamos práticas conscientes na produção e no consumo.</p></li>
                    <li><p><span class="font-bold">Atendimento humanizado:</span> Cada cliente é tratado com atenção, respeito e empatia.</p></li>
                    <li><p><span class="font-bold">Inovação:</span> Buscamos constantemente novas tendências e formas criativas de inspirar confiança através da moda.</p></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection