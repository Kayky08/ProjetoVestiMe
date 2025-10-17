@extends("layouts.main")

@section('title', 'Contato')

@section('content')

<section class="flex flex-col justify-center items-center m-25">
    <h1 class="text-[#7E9796] font-bold text-center text-5xl m-10">CONTATO</h1>

    <div class="bg-[#EAEAEA] p-3 flex justify-around items-center w-300 rounded-2xl">
        <form action="" class="flex items-center flex-col w-100">
            <div class="flex m-3">
                <img class="m-3" src="/imgs/email.svg" alt="">
                <input class="cols-span-2 bg-white w-100 p-2 rounded-2xl" type="text" placeholder="E-mail">
            </div>

            <div class="flex m-3">
                <img class="m-3" src="/imgs/telefone.svg" alt="">
                <input class="bg-white w-100 p-2 rounded-2xl" type="text" placeholder="Telefone">
            </div>
           
            <div class="flex m-3 items-start">
                <img class="m-3" src="/imgs/mensagem.svg" alt="">
                <textarea class="bg-white w-100 p-2 rounded-2xl" name="" id="" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>
            </div>

            <input class="pt-2 pb-2 pr-8 pl-8 text-white font-bold rounded-2xl text-2xl bg-[#7E9796]" type="submit" value="Enviar">
        </form>

        <p class="p-5 text-center text-3xl w-100 text-[#7E9796] ">Tem dúvidas sobre nossos produtos ou seu pedido? Entre em contato conosco.</p>
    </div>
</section>

@endsection