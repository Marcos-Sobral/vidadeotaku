<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/reset.css'); }} " media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css'); }} " media="screen" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/7d7b31a9bc.js" crossorigin="anonymous"></script>
    
    <style>
          nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #111827;
            padding: 2% 5%;
          }

          .nav-list {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 2em;
            padding-inline: revert;
            text-decoration: none;
          }

          .nav-list a {
            color: #fff;
            padding: 1em;
            display: block;
            width: 100%;
            text-decoration: none; /* Removendo sublinhado padrão dos links */
            transition: color 0.3s; /* Adicionando transição de cor */
        }

        .nav-list a:hover {
            color: #8000ff; /* Mudando a cor no hover */
        }

          /* Adicionado para o menu de sanduíche */
          #nav-toggle {
            display: none;
          }

          .toggle-nav {
            display: none;
            cursor: pointer;
            font-size: 1.5em;
            color: #fff;
          }

    /* Alteração no seletor abaixo */
    @media screen and (max-width: 768px) {
        .nav-list {
            display: none;
            flex-direction: column;
            width: 100%;
            position: absolute;
            top: 60px;
            left: 0;
            background-color: #111827;
            text-align: center;
        }

        .nav-list a {
            color: #fff;
            padding: 1em;
            display: block;
            width: 100%;
        }

        .toggle-nav {
            display: block;
        }

        /* Correção aqui */
        #nav-toggle:checked + label + .nav-list {
            display: flex;
        }
    }
</style>
</head>
<body>
  <nav>
    <img src="https://cdn.discordapp.com/attachments/809468459448664126/1058427760231596082/Jahy_sama_1.png" class="w-16 rounded-full">
    <input type="checkbox" id="nav-toggle">
    <label for="nav-toggle" class="toggle-nav">&#9776;</label>
    <ul class="nav-list">
      <li><a href="{{URL::route('animes.about')}}">Inicio</a></li>
      <li><a href="{{URL::route('animes.index')}}">Animes</a></li>
      <li><a href="{{URL::route('listas.index')}}">Minha Lista</a></li>
      <li><a href="{{URL::route('listas.index')}}">Sobre</a></li>
    </ul>
  </nav>
</body>
</html>
