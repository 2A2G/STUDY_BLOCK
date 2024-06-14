@extends('layout.layout')

@section('title', 'STUDY BLOCK')

@section('content')
    <section class="bg-white dark:bg-[#A8DADC]">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-12">
            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                ¡Hello, <span class="inline-block typewriter">world</span>!
            </h1>

            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                Esta página y los diferentes enlaces los llevarán a un repositorio público en GitHub,
                donde estarán publicados varios programas de diferentes lenguajes de programación.
            </p>
            <span class="font-semibold text-gray-400 uppercase">Soy Aldair Antonio Gutierrez Guerrero, y te doy la bienvenida
                a "HELLO, WORLD"</span>
            <br>
            <br>
            <a href="{{ route('Dashboard.home') }}">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Más información
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </button>
            </a>
            <br>
            <br>
            <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
                <span class="font-semibold text-gray-400 uppercase">PRESENTADO EN</span>
                <div class="flex flex-wrap items-center justify-center mt-8 text-gray-500 sm:justify-between">
                    <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block" type="button">
                        <svg width="200" height="200" xmlns="http://www.w3.org/2000/svg">
                            <image href="/Icon/Icon_LogoAldair.jpg" width="200" height="200" />
                        </svg>
                    </button>

                    <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block" type="button">
                        <svg width="200" height="200" xmlns="http://www.w3.org/2000/svg">
                            <image href="/Icon/Icon_GitHub.png" width="200" height="200" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>



    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Política de Privacidad y Redirección
                    </h3>
                    <button type="button"
                        class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="staticModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Bienvenido al servicio proporcionado por AG. Antes de proceder, es importante que comprenda nuestra
                        política de
                        privacidad y el proceso de redirección a nuestro repositorio público. Lea atentamente la siguiente
                        información.

                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        1. Recopilación de Datos

                        AG recopila y almacena información limitada sobre su visita con el único propósito de administrar el
                        proceso de redirección al repositorio público. Esta información puede incluir datos como su
                        dirección IP, el navegador que está utilizando y la hora de acceso. No recopilamos información
                        personal identificable a través de este proceso.

                        2. Uso de Cookies

                        AG puede utilizar cookies y tecnologías similares para mejorar su experiencia durante el proceso de
                        redirección. Estas cookies no recopilan información personal y son utilizadas únicamente con el
                        propósito de facilitar la navegación.

                        3. Repositorio Público de AG

                        El repositorio público de AG contiene información y recursos relacionados con nuestros servicios y
                        proyectos. Al dar su consentimiento para la redirección, entenderá que se le dirigirá a un sitio web
                        externo que está fuera de nuestro control. Le recomendamos revisar la política de privacidad del
                        repositorio público de AG para comprender cómo se maneja la información allí.

                        4. Consentimiento para la Redirección

                        Al continuar con el proceso, usted está dando su consentimiento para ser redirigido al repositorio
                        público de AG. Si no está de acuerdo con esto, le recomendamos que no proceda y abandone esta
                        página.

                        5. Seguridad de los Datos

                        AG toma medidas razonables para proteger la información recopilada durante el proceso de
                        redirección. Sin embargo, no podemos garantizar la seguridad completa de los datos transmitidos a
                        través de Internet.

                        6. Cambios en la Política de Privacidad

                        AG se reserva el derecho de modificar esta política en cualquier momento sin previo aviso. Cualquier
                        cambio en la política de privacidad se publicará en esta página.

                        Al continuar con el proceso de redirección, usted indica que ha leído, comprendido y aceptado los
                        términos de esta política de privacidad y está de acuerdo con la redirección al repositorio público
                        de AG. Si no está de acuerdo, le recomendamos abandonar esta página.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <a href="https://github.com/2A2G">
                        <button data-modal-hide="staticModal" type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                            accept</button>
                    </a>
                    <a>
                        <button data-modal-hide="staticModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                            Decline</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
