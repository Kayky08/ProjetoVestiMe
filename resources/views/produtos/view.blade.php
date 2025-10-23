@extends("layouts.main")

@section('title', 'Produtos')

@section('content')

<section class="flex flex-col justify-center items-center">
    <h1 class="text-[#7E9796] font-bold text-center text-5xl m-10">Produtos</h1>
    
    <div class="flex flex-col justify-center items-center">
        <div class="lg:w-350 sm:w-150">
            <div class="flex justify-around w-full bg-[#7E9796] p-5 m-10 rounded-full">
                
            </div>
        </div>

        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-5 mb-10">
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
                            <p class="m-3 text-2xl font-bold">R$ {{number_format($product->valor, 2, ',', '.')}}</p>
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        <div>
</section>

@endsection