<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/7d7b31a9bc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/normalize.css'); }} " media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css'); }} " media="screen" />
    <style>
      nav{
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: row;
        background-color: #111827;
        color: white;
        padding:2% 5%;
      }
      
      .toggle-nav {
        display: flex;
        align-items: center;
        font-size: 24px;
        color: white;
        background-color: transparent;
        border: none;
        cursor: pointer;
      }
      
      .close {
        display: none;
      }
      
      ul{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        gap: 3em;
        list-style: none;
        margin: 0;
        padding: 0;
      }
      
      nav li {
        padding: 10px;
        border-bottom: 1px solid #fff;
        transition: background-color 0.2s ease-in-out;
      }
      
      nav li:hover{
        background-color: #5B6247;
        border-radius: 50%;
        transition: color 0.2s ease-in-out;
      }
      
      a{
        color: white;
        text-decoration: none;
      }
      
      input[type="checkbox"] {
        position: absolute;
        top: -9999px;
        left: -9999px;
      }
      
      input[type="checkbox"] + label {
        display: none;
        cursor: pointer;
        font-size: 24px;
        color: white;
        background-color: transparent;
        border: none;
        padding: 0;
      }
      
      input[type="checkbox"] + label:before {
        content: "\f0c9";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 24px;
      }
      
      input[type="checkbox"]:checked + label:before {
        content: "\f00d";
      }
      
      @media (max-width: 600px) {
        nav{
          padding: 7% 5%;
        }
        input[type="checkbox"] + label {
          display: block;
        }
        
        input[type="checkbox"]:checked ~ ul {
          display: flex;
          flex-direction: column;
          position: absolute;
          top: 6.5rem;
          left: 0;
          width: 100%;
          background-color: #111827;
          padding: 10px;
        }
        
        input[type="checkbox"]:checked ~ ul li {
          display: block;
          padding: 10px;
          border-bottom: 1px solid #fff;
        }
        
        input[type="checkbox"]:checked ~ ul li:hover{
          background-color: #5B6247;
          border-radius: 50%;
        }
        
        input[type="checkbox"]:not(:checked) ~ ul {
          display: none;
        }
      }
</style>
</head>
<body>
<body>
  <nav>
    <img src="https://cdn.discordapp.com/attachments/809468459448664126/1058427760231596082/Jahy_sama_1.png" class="w-16 rounded-full">
    <input type="checkbox" id="nav-toggle">
    <label for="nav-toggle" class="toggle-nav"></label>
    <ul>
      <li><a href="{{URL::route('animes.about')}}">Inicio</a></li>
      <li><a href="{{URL::route('animes.index')}}">Animes</a></li>
      <li><a href="{{URL::route('listas.index')}}">Minha Lista</a></li>
      <li><a href="">Sobre</a></li>
    </ul>
  </nav>
</body>
</html>