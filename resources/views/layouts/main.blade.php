<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

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

        <footer class="flex justify-around">
            <div>
                <h4>Nossa Loja</h4>

                <ul>
                    <li><a href="">Sobre Nós</a></li>
                    <li><a href="">Cadastro/Login</a></li>
                    <li><a href="">SAC</a></li>
                </ul>
            </div>

            <div>
                <h4>Termos e Condições</h4>

                <ul>
                    <li><a href="">Politica da Loja</a></li>
                    <li><a href="">Envio e devolução</a></li>
                    <li><a href="">Metodos de Pagamento</a></li>
                </ul>
            </div>

            <div>
                <h4>Midias Sociais</h4>

                <ul>
                    <li><a href="">Instagran</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                </ul>
            </div>

            <p>&copy; Todos os direitos reservados para Vesti.me 2025</p>
        </footer>
    </main>
</body>
</html>