<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionando Animes</title>
    <style>
        input, select {
        padding: 8px;
        border-radius: 20PX;
        color: #fff;
        background-color: black;
        margin: 5px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
        }

        button {
        padding: 8px 16px;
        font-size: 14px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        button:hover {
        background-color: #45a049;
        }
  </style>
</head>
<body>
    <livewire:header />
    <main class="main">
        <form method="POST" action="{{route('animes.store')}}" enctype="multipart/form-data" class="container text-white">    
        @csrf 
            <div class="grid grid-cols-3 gap-6 mt-2">
                <div class="grid justify-center text-center mt-2">
                    <label for="img_anime_id" class="text-white">Imagem do anime</label>

                    <select name="img_anime_id" id="img_anime_id">
                        @foreach($animes as $anime)
                            <option name="img_anime_id" id="img_anime_id" value="{{ $anime->img_anime_id }}">{{ $anime->img_anime_id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid justify-center text-center mt-2">
                    <label for="ep_anime_id">EPANIME</label>
                    <select name="ep_anime_id" id="ep_anime_id">
                        @foreach($animes as $anime)
                            <option name="ep_anime_id" id="ep_anime_id" value="{{ $anime->ep_anime_id }}">{{ $anime->ep_anime_id }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid justify-center text-center mt-2">
                    <label for="lista_anime_id">Lista do anime</label>
                    <select name="lista_anime_id" id="lista_anime_id">
                        @foreach($animes as $anime)
                            <option name="lista_anime_id" id="lista_anime_id" value="{{ $anime->id }}">{{ $anime->ep_anime_id }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 mt-2 gap-6">
                <div class="grid justify-center text-center">
                    <label for="Name">Nome</label>
                    <input name="Name" id="Name" type="text" placeholder="Nome do anime">
                </div>

                <div class="grid justify-center text-center">
                    <label for="Link">Link</label>
                    <input name="Link" id="Link" type="text" placeholder="www.google.com ">
                </div>
            </div>
            
            <div class="grid grid-cols-3 gap-6 mt-2">
                <div class="grid justify-center text-center">
                    <label for="Status">Status</label>
                    <input name="Status" id="Status" type="text" placeholder="AMEII">
                </div>

                <div class="grid justify-center text-center">
                    <label for="Genre">Genêro</label>
                    <input name="Genre" id="Genre" type="text" placeholder="AÇÃO">
                </div>
                <div class="grid justify-center text-center">
                    <label for="Sinopsis">Descrição</label>
                    <input name="Sinopsis" id="Sinopsis" type="text" placeholder="Anime top demais ">
                </div>
            </div>
            <div class="text-center">
                <button class="button button:hover mt-2">
                    Salvar
                </button>
            </div>
        </form> 
    </main>
</body>
</html>