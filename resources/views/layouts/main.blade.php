<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!--Linkando o Tailwind e o CSS-->
    @vite('resources/css/app.css')

    <title>@yield('title')</title>
</head>
<body>
    <main>
        <header class="bg-[#7E9796] text-white">
            <nav class="flex justify-around items-center p-2">
                <a href="">
                    <img src="/imgs/logo.svg" alt="">
                </a>

                <div class="w-100">
                    <ul class="flex justify-around">
                        <li><a href="">CATEGORIAS</a></li>
                        <li><a href="">SAC</a></li>
                        <li><a href="">CONTATO</a></li>
                    </ul>
                </div>

                <div class="relative w-100">
                    <input class="p-2 pl-4 pr-10 py-2 w-100 bg-white text-black placeholder-gray-400 italic rounded" type="text" placeholder="Pesquisar">
                    <img class="absolute right-3 top-1/2 -translate-y-1/2 w-7 h-7" src="/imgs/lupa.svg" alt="">
                </div>

                <div class="w-50 flex justify-around">
                    <a href="" class="flex justify-around items-center">
                        <img src="/imgs/login.svg" alt="">
                    </a>

                    <a href="">
                        <img src="/imgs/sacola.svg" alt="">
                    </a>
                </div>
            </nav>
        </header>
        
        @yield('content')

        <footer class="bg-[#7E9796] p-5 text-white">
            <div class="flex justify-around ">
                <div>
                    <h4 class="text-center text-3xl pl-10 pr-10 pt- pb-1 border-4">Nossa Loja</h4>

                    <ul class="text-center m-5 text-lg">
                        <li class="m-2"><a href="">Sobre Nós</a></li>
                        <li class="m-2"><a href="">Cadastro/Login</a></li>
                        <li class="m-2"><a href="">SAC</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-center text-3xl pl-10 pr-10 pt-2 pb-2 border-4">Termos e Condições</h4>

                    <ul class="text-center m-5 text-lg">
                        <li class="m-2"><a href="">Politica da Loja</a></li>
                        <li class="m-2"><a href="">Envio e devolução</a></li>
                        <li class="m-2"><a href="">Metodos de Pagamento</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-center text-3xl pl-10 pr-10 pt-1 pb-1 border-4">Midias Sociais</h4>

                    <ul class="text-center m-5 text-lg">
                        <li class="m-2"><a href="">Instagran</a></li>
                        <li class="m-2"><a href="">Facebook</a></li>
                        <li class="m-2"><a href="">Twitter</a></li>
                    </ul>
                </div>
            </div>
            
            <p class="text-center m-3">&copy; Todos os direitos reservados para Vesti.me 2025</p>
        </footer>
    </main>
</body>
</html>