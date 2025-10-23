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
            <p class="text-white text-5xl font-bold">SEJA BEM VINDO</p>
            <P class="text-white text-3xl font-bold">Por favor faça seu login</P>

            <div>
                <img class="w-100" src="/imgs/login.svg" alt="">
            </div>
            
            <form class="flex flex-col items-center" action="">
                <input class="bg-white m-5 p-2 w-100 rounded-full" type="email" name="" id="" placeholder="E-mail">
                <input class="bg-white m-5 p-2 w-100 rounded-full" type="password" name="" id="" placeholder="Senha">
                <p class="text-white">Esqueceu a senha? <a class="underline" href="">Clique aqui.</a></p>

                <button class="bg-white font-bold text-3xl text-[#7E9796] w-50 rounded-full m-5 p-2">ENTRAR</button>
            </form>

            <p class="text-white">Não possui cadastro? <a class="underline" href="/cadastro">Clique aqui.</a></p>
        </div>
    </section>
</body>
</html>