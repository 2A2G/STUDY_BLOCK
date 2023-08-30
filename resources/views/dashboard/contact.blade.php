<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            /* background-color: #f2f2f2; */
            background: linear-gradient(to bottom, #007bff, #ffffff);

        }

        .profile {
            /* background-color: #ffffff; */
            background: linear-gradient(to bottom, transparent, #ffffff);

            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            max-width: 600px;
            width: 100%;
            height: 600px;

        }

        .profile img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            margin-bottom: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .profile img:hover {
            transform: scale(1.1);
        }

        .social-links {
            margin-top: 15px;
        }

        .social-links a {
            margin: 0 10px;
            color: #333;
            text-decoration: none;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="profile">
        <img src="/Icon/Icon_Aldair.png" alt="Foto de Perfil">
        <h1>ALDAIR ANTONIO <br>GUTIERREZ GUERRERO</h1>
        <p>Nacionalidad: Colombiana</p>
        <p>Carrera: <i class="fas fa-book"></i> Software Development</p>
        <p>Número de Teléfono: <i class="fas fa-phone"></i> +57 300 489 1278</p>
        <div class="social-links">
            <a href="enlace_facebook" target="_blank">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href="https://instagram.com/g24Aldair" target="_blank">
                <i class="fab fa-instagram-square"></i>
            </a>
            <a href="https://twitter.com/242A2G" target="_blank">
                <i class="fab fa-twitter-square"></i>
            </a>

            <a href="enlace_linkedin" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com/2A2G" target="_blank">
                <i class="fab fa-github"> </i>
            </a>
        </div>
    </div>

</body>

</html>
