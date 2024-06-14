@extends('layout.layout')

@section('title', 'Contact')

@section('content')
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-gradient-to-b from-transparent to-white shadow-lg p-6 text-center rounded-lg max-w-xl w-full">
            <div class="flex justify-center">
                <img src="/Icon/Icon_Aldair.png" alt="Foto de Perfil"
                    class="w-72 h-72 rounded-full mb-4 transition-transform duration-300 ease-in-out hover:scale-110">
            </div>
            <h1 class="text-2xl font-bold text-center">ALDAIR ANTONIO <br>GUTIERREZ GUERRERO</h1>
            <p class="text-lg text-center">Nacionalidad: Colombiana</p>
            <p class="text-lg text-center">Carrera: <i class="fas fa-book"></i> Software Development</p>
            <p class="text-lg text-center">Número de Teléfono: <i class="fas fa-phone"></i> +57 300 489 1278</p>
            <div class="social-links mt-4 flex justify-center space-x-4">
                <a href="https://web.facebook.com/profile.php?id=100081137825620" target="_blank"
                    class="text-gray-700 text-xl">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="https://instagram.com/g24Aldair" target="_blank" class="text-gray-700 text-xl">
                    <i class="fab fa-instagram-square"></i>
                </a>
                <a href="https://twitter.com/242A2G" target="_blank" class="text-gray-700 text-xl">
                    <i class="fab fa-twitter-square"></i>
                </a>
                <a href="https://www.linkedin.com/in/aldair-gutierrez-b002a9274/" target="_blank"
                    class="text-gray-700 text-xl">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/2A2G" target="_blank" class="text-gray-700 text-xl">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <div class="social-links mt-4">
                <p class="text-lg text-center">Skills</p>
                <div class="flex flex-wrap justify-center">
                    <i class="mx-2">Backend -</i>
                    <i class="mx-2">Git -</i>
                    <i class="mx-2">Java -</i>
                    <i class="mx-2">Spring Boot -</i>
                    <i class="mx-2">Laravel -</i>
                    <i class="mx-2">Postman -</i>
                    <i class="mx-2">MicroServicios -</i>
                    <i class="mx-2">PostgreSQL</i>
                </div>
            </div>
        </div>
    </div>
@endsection
