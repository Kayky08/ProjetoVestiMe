<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>Login</title>
</head>
<body>
    <section class="flex justify-between bg-[#7E9796]">
        <div>
            <img class="h-full" src="/imgs/exposicao3.svg" alt="">
        </div>

        <div class="text-center flex flex-col justify-center items-center bg-[#7E9796] w-150 mr-75 p-15 rounded-4xl">
            <p class="text-white text-5xl font-bold">CADASTRE-SE</p>
            <P class="text-white text-3xl">Você poderá começar suas compras assim que se cadastrar-se</P>

            
            <form class="flex flex-col items-center" action="/">
                <input class="bg-white m-5 p-2 w-100 rounded-full" type="text" name="" id="" placeholder="Nome">
                <input class="bg-white m-5 p-2 w-100 rounded-full" type="text" name="" id="" placeholder="Sobrenome">
                <input class="bg-white m-5 p-2 w-100 rounded-full" type="email" name="" id="" placeholder="E-mail">
                <input class="bg-white m-5 p-2 w-100 rounded-full" type="text" name="" id="" placeholder="CPF">
                <input class="bg-white m-5 p-2 w-100 rounded-full" type="text" name="" id="" placeholder="Telefone">
                <input class="bg-white m-5 p-2 w-100 rounded-full" type="password" name="" id="" placeholder="Senha">
                <input class="bg-white m-5 p-2 w-100 rounded-full" type="password" name="" id="" placeholder="Repita a Senha">

                <button class="bg-white font-bold text-3xl text-[#7E9796] w-75 rounded-full m-5 p-2">CADASTRAR-SE</button>
            </form>

            <p class="text-white">Já possui cadastro? <a class="underline" href="/login">Clique aqui.</a></p>
        </div>
    </section>
</body>
</html>