<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/normalize.css'); }} " media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css'); }} " media="screen" />
    <style>
      nav{
        display: flex;
        justify-content: space-around;
        flex-direction: row;
        background-color: #111827;
        color: white;
        padding:2% 5%;
      }
      
      .toggle-nav {
        display: none;
        font-size: 24px;
        color: white;
        background-color: transparent;
        border: none;
        cursor: pointer;
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
      }
      
      nav li:hover{
        background-color: #5B6247;
        border-radius: 50%;
      }
      
      a{
        color: white;
        text-decoration: none;
      }
      
      @media (max-width: 600px) {
        .toggle-nav {
          display: block;
        }
        
        ul {
          display: none;
          /*flex-direction: column;*/
          justify-content:space-between;
          position: absolute;
          top: 50px;
          left: 0;
          width: 100%;
          background-color: #111827;
          padding: 10px;
        }
        
        ul li {
          display: block;
          padding: 10px;
          border-bottom: 1px solid #fff;
        }
        
        ul li:hover{
          background-color: #5B6247;
          border-radius: 50%;
        }
        
        nav ul.show {
          display: flex;
        }
        .w-16{
          width: 2.5rem;
        }
      }
    </style>
</head>
<body>
    <nav>
    <img src="{{env('APP_URL')}}/assets/img/1.png" class="w-16 rounded-full">
    <button class="toggle-nav">&#9776;</button>
    <ul>
          <li><a href="">Inicio</a></li>
          <li><a href="">Animes</a></li>
          <li><a href="">Minha Lista</a></li>
          <li><a href="">Sobre</a></li>
        </ul>
    </nav>
    <script>
      const toggleNavBtn = document.querySelector('.toggle-nav');
      const navUl = document.querySelector('nav ul');
      
      toggleNavBtn.addEventListener('click', function() {
        navUl.classList.toggle('show');
      });
    </script>
</body>
</html>