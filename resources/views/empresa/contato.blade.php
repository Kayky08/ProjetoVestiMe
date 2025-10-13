@extends("layouts.main")

@section('title', 'Contato')

@section('content')

<section class="m-25">
    <h1 class="text-center text-5xl m-10">CONTATO</h1>

    <div class="bg-[#EAEAEA] p-5 flex justify-around">
        <form action="" class="flex-col w-100">
            <input class="bg-white w-full m-5" type="text" placeholder="E-mail">

            <input type="text" placeholder="Telefone">
            
            <textarea name="" id="" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>
            
            <input type="submit" value="Enviar">
        </form>

        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus eros ac justo volutpat consectetur. Ut sit amet turpis magna. Praesent commodo faucibus libero eu mollis. Nunc vitae vulputate sem. Nulla eu risus vitae massa vestibulum vehicula quis ut leo. Cras nec aliquet ex.</p>
    </div>
</section>

@endsection