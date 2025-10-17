@extends("layouts.main")

@section('title', 'Produtos')

@section('content')

<section class="flex flex-col justify-center items-center">
    <h1 class="text-[#7E9796] font-bold text-center text-5xl m-10">Produtos</h1>
    
    <div class="flex flex-col justify-center items-center">
        <div class="w-350">
            <div class="flex justify-around w-full bg-[#7E9796] p-5 m-10 rounded-full">
                <select class="bg-white p-2 rounded-2xl w-50" name="" id="">
                    <option value="0">CATEGORIA</option>
                    <option value="">ROUPAS</option>
                    <option value="">ACESSORIOS</option>
                    <option value="">CALÇADOS</option>
                </select>

                <select class="bg-white p-2 rounded-2xl w-50" name="" id="">
                    <option value="0">CATEGORIA</option>
                    <option value="">ROUPAS</option>
                    <option value="">ACESSORIOS</option>
                    <option value="">CALÇADOS</option>
                </select>

                <select class="bg-white p-2 rounded-2xl w-50" name="" id="">
                    <option value="0">CATEGORIA</option>
                    <option value="">ROUPAS</option>
                    <option value="">ACESSORIOS</option>
                    <option value="">CALÇADOS</option>
                </select>

                <select class="bg-white p-2 rounded-2xl w-50" name="" id="">
                    <option value="0">CATEGORIA</option>
                    <option value="">ROUPAS</option>
                    <option value="">ACESSORIOS</option>
                    <option value="">CALÇADOS</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-4 w-350">
            <div class="text-center m-5">
                <img class="rounded-2xl m-3" src="/imgs/perfume1.svg" alt="">
                <p class="text-xl">XXXXXXXXXXXXXX</p>
                <p class="text-xl font-bold">R$ XXXXX,XXX</p>
            </div>

            <div class="text-center m-5">
                <img class="rounded-2xl m-3" src="/imgs/perfume1.svg" alt="">
                <p class="text-xl">XXXXXXXXXXXXXX</p>
                <p class="text-xl font-bold">R$ XXXXX,XXX</p>
            </div>

            <div class="text-center m-5">
                <img class="rounded-2xl m-3" src="/imgs/perfume1.svg" alt="">
                <p class="text-xl">XXXXXXXXXXXXXX</p>
                <p class="text-xl font-bold">R$ XXXXX,XXX</p>
            </div>

            <div class="text-center m-5">
                <img class="rounded-2xl m-3" src="/imgs/perfume1.svg" alt="">
                <p class="text-xl">XXXXXXXXXXXXXX</p>
                <p class="text-xl font-bold">R$ XXXXX,XXX</p>
            </div>
        </div>
    </div>
</section>

@endsection