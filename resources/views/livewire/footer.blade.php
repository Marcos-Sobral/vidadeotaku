<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       footer {
            background-color: #111827;
            color: #fff;
            display: flex;
            justify-content: space-between;
            padding: 5%;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-columns:repeat(3, 1fr);
            text-align: center;
        }

        li {
            display: inline-block;
            margin-right: 20px;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        .social a {
            color: #fff;
            margin-right: 20px;
        }

        .fa-facebook:before {
            content: "\f09a";
        }

        .fa-twitter:before {
            content: "\f099";
        }

        .fa-instagram:before {
            content: "\f16d";
        }

        .fab {
            font-family: "Font Awesome 5 Brands";
            font-size: 18px;
        }

        @media (max-width: 800px) {
            ul {
                grid-template-columns:repeat(1, 1fr);
            }
        }
    </style>
</head>
<body>
    <footer>
    <ul>
        <li><a href="#">Dúvidas</a>
            <p class="text-medium mt-6 text-justify">(63) xxxxx-xxxx</p>
        </li>
        <li><a href="#">Sobre nós</a>
        <p class="text-medium mt-6 text-justify">O vida de otaku é um sistema voltado para o 
            público que Brasileiro que ama a cultura de animações japonesas tanto quanto nós.</p>
        </li>
        <li  class="social">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
    </ul>
    </footer>
</body>
</html>