<!DOCTYPE html>
<html lang="pt-br">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/images/White_Butterfly.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Chrysalis - Sua loja preferida</title>
    <style>
        @keyframes butterfly-flying {
            0% {
                transform: scaleX(1);
            }

            50% {
                transform: scaleX(0.6);
            }

            100% {
                transform: scaleX(1);
            }
        }

        #butterfly_img {
            transition: all 2s ease;
        }

        #butterfly_img:hover {
            animation-name: butterfly-flying;
            animation-duration: 0.8s;
            animation-iteration-count: infinite;
        }
    </style>
</head>

<body>
    <header>

        <nav class="bg-orange-500 border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <div class="flex flex-wrap items-center space-x-3 rtl:space-x-reverse">
                    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse"><img id="butterfly_img"
                            src="assets/images/White_Butterfly.png" class="h-8" alt="Chrysalis Logo Borboleta" /></a>
                    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse"><img
                            src="assets/images/White_Chrysalis.png" class="h-8" alt="Chrysalis Logo Texto" /></a>
                </div>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto bg-orange-500" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-orange-500 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-orange-500 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:bg-transparent text-white transition-colors hover:text-gray-900">Início</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:bg-transparent text-white transition-colors hover:text-gray-900">Sobre</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:bg-transparent text-white transition-colors hover:text-gray-900">Ajuda</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:bg-transparent transition-colors hover:text-gray-900 "><img
                                    src="assets/images/icons/cart.svg" alt="Carrinho" style="filter: invert(100%)"></a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:bg-transparent transition-colors hover:text-gray-900 "><img
                                    src="assets/images/icons/account.svg" alt="Carrinho"
                                    style="filter: invert(100%)"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main>@yield('content')</main>


    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-700 sm:text-center dark:text-gray-400">© 2024 <a href=""
                    class="hover:underline">Chrysalis™</a>. Todos os Direitos reservados.</span>
            <span class="block text-sm text-gray-700 sm:text-center dark:text-gray-400">Desenvolvidos por alunos do <a
                    href="https://colegiocomercialcpv.com.br" target="_blank" class="hover:underline">Colégio Comercial
                    de Caçapava</a>.</span>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
