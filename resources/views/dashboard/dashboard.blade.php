<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOC OF STUDY</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
    {{-- Sesion de nav --}}
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <a href="{{ route('welcome') }}" class="flex items-center">
                <img src=/Icon/Icon_LogoAldair.jpg class="h-8 mr-3" alt="Logo de AG" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BLOC OF STUDY</span>
            </a>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('Dashboard.home') }}"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('welcome') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <button onclick=irASeccion2()
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</button>
                        <script>
                            function irASeccion2() {
                                window.location.href = '#Servicios;'; // Esto apunta al elemento con el id "seccion2"
                            }
                        </script>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Sesion Informaion de repositorio --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6 ">
            <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Nuestros
                    Repositorios</h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Explore toda la colección de
                    elementos y
                    componentes de código abierto creados por AG.</p>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                <div class="items-center rounded-lg shadow bg-gray-50 sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="https://github.com/2A2G/JAVA" target="_blank">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="/Icon/Icon_Java.jpg"
                            alt="Icono de Java">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="https://github.com/2A2G/JAVA" target="_blank">JAVA</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Oracle</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Java es un lenguaje de
                            programación
                            que se compila en bytecode y se ejecuta en una máquina virtual, lo que permite que el código
                            se ejecute
                            en cualquier plataforma con una JVM instalada, y ofrece un gran conjunto de bibliotecas
                            estándar para facilitar
                            el desarrollo de aplicaciones.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                        </ul>
                    </div>
                </div>
                <div class="items-center rounded-lg shadow bg-gray-50 sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="https://github.com/2A2G/PHP" target="_blank">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="/Icon/Icon_PHP.png"
                            alt="Icono de PHP">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="https://github.com/2A2G/PHP" target="_blank">PHP</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Rasmus Lerdorf</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"> es un lenguaje de código
                            abierto muy popular especialmente
                            adecuado para el desarrollo web y que puede ser incrustado en HTML.</p>
                    </div>
                </div>
                <div class="items-center rounded-lg shadow bg-gray-50 sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="https://github.com/2A2G/LARAVEL" target="_blank">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="/Icon/Icon_Laravel.png"
                            alt="Icono de Laravel">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="https://github.com/2A2G/LARAVEL" target="_blank">LARAVEL</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Framework de PHP</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Laravel es un framework PHP
                            gratis y
                            de código abierto que brinda un conjunto de herramientas y recursos para crear aplicaciones
                            modernas.
                            Posee un ecosistema integral que combina funciones integradas y una variedad de paquetes y
                            extensiones compatibles. .</p>
                    </div>
                </div>
                <div class="items-center rounded-lg shadow bg-gray-50 sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="https://github.com/2A2G/MODELADO_DATABASE" target="_blank">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="/Icon/Icon_BaseDatos.png"
                            alt="Icono de DataBase">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="https://github.com/2A2G/MODELADO_DATABASE" target="_blank">MODELADO DE BASE DE
                                DATOS</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Sql</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"> El modelado de datos es el
                            proceso de creación de una
                            representación visual o esquema que define los sistemas de recopilación y administración de
                            información de cualquier organización.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sesion de servicios --}}
    <section id=Servicios; class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
            <div class="" style="margin: 0; width: 100%; text-align: justify;">
                <center>
                    <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">¿QUÉ TENEMOS
                        PARA OFRECERTE?</h2>
                </center>
                <br>
                <p class="text-gray-500 sm:text-xl dark:text-gray-900">Desde AG y su subdirectorio BLOC OF STUDY, nos
                    hemos enfocado en la
                    creación de repositorios de código abierto. A travésde esta iniciativa, buscamos impulsar el avance
                    tecnológico y ofrecer herramientas que sean de gran
                    utilidad para la comunidad. Cada línea de código que compartimos es un paso hacia adelante en la
                    colaboración global, permitiendo a desarrolladores y
                    entusiastas acceder a soluciones innovadoras. Creemos en el poder de la comunidad para transformar
                    ideas en realidades tangibles. Al proporcionar recursos
                    abiertos, aspiramos a fomentar el aprendizaje, la creatividad y el progreso en el mundo de la
                    tecnología.</p>
                <br>
                <br>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Marketing</h3>
                    <p class="text-gray-500 dark:text-gray-400">Promovemos colaboración global mediante repositorios de
                        código. Únete a la innovación tecnológica con AG y BLOC OF STUDY.</p>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Legal</h3>
                    <p class="text-gray-500 dark:text-gray-400">Garantizamos cumplimiento legal en repositorios de
                        código abierto. Confianza y transparencia son nuestra prioridad.</p>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path
                                d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Business Automation</h3>
                    <p class="text-gray-500 dark:text-gray-400">Simplificamos procesos con automatización empresarial
                        en AG y BLOC OF STUDY. Libera tiempo para lo esencial.</p>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Finance</h3>
                    <p class="text-gray-500 dark:text-gray-400">Gestión financiera sólida impulsa nuestra labor en
                        repositorios de código. Transparencia en cada paso.</p>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Enterprise Design</h3>
                    <p class="text-gray-500 dark:text-gray-400">Diseño empresarial centrado en usuarios, reflejado en
                        repositorios de AG y BLOC OF STUDY. Tecnología con propósito.</p>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Operations</h3>
                    <p class="text-gray-500 dark:text-gray-400">Operaciones eficientes para brindar soluciones
                        tecnológicas desde AG y BLOC OF STUDY. Avanzando juntos.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Sesion de footer --}}
    <footer class="m-4 bg-white rounded-lg shadow dark:bg-gray-900">
        <div class="w-full max-w-screen-xl p-4 mx-auto md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="{{ route('welcome') }}" class="flex items-center mb-4 sm:mb-0">
                    <img src="/Icon/Icon_LogoAldair.jpg" class="h-8 mr-3" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BLOC OF
                        STUDY</span>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="{{ route('welcome') }}" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy
                            Policy</a>
                    </li>
                    <li>
                        <a href="{{route('Dashboard.contact')}}" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                    href="{{ route('welcome') }}" class="hover:underline">BLOC OF STUDY™</a>. All Rights
                Reserved.</span>
        </div>
    </footer>
</body>

</html>
