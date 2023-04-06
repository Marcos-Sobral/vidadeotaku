<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Animes</title>
</head>
<body>
    <livewire:header />
    <main class="main"> 
        <form name="" id="" method="post" action="{{route('animes.update', [$animes->id])}}" enctype="multipart/form-data">    
            @csrf
            @method("PUT") 
            <div class="grid grid-cols-3 gap-6 mt-2">
                <div class="grid justify-center text-center mt-2">
                    <label for="img_anime_id">Imagem do anime</label>
                    <select name="img_anime_id" id="img_anime_id">
                        @foreach($animes as $anime)
                            <option name="img_anime_id" id="img_anime_id" value="{{ $animes->img_anime_id }}">{{ $animes->img_anime_id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid justify-center text-center mt-2">
                    <label for="ep_anime_id">EPANIME</label>
                    <select name="ep_anime_id" id="ep_anime_id">
                        @foreach($animes as $anime)
                            <option name="ep_anime_id" id="ep_anime_id" value="{{ $animes->ep_anime_id }}"> {{ $animes->ep_anime_id }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid justify-center text-center mt-2">
                    <label for="lista_anime_id">Lista do anime</label>
                    <select name="lista_anime_id" id="lista_anime_id">
                        @foreach($animes as $anime)
                            <option name="lista_anime_id" id="lista_anime_id" value="{{ $animes->id }}">{{ $animes->ep_anime_id }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 mt-2 gap-6">
                <div class="grid justify-center text-center">
                    <label for="Name">Nome</label>
                    <input name="Name" id="Name" type="text" value="{{ $animes->Name }}" placeholder="Nome do anime">
                </div>

                <div class="grid justify-center text-center">
                    <label for="Link">Link</label>
                    <input name="Link" id="Link" type="text" value="{{ $animes->Link }}" placeholder="www.google.com ">
                </div>
            </div>
            
            <div class="grid grid-cols-3 gap-6 mt-2">
                <div class="grid justify-center text-center">
                    <label for="Status">Status</label>
                    <input name="Status" id="Status" type="text" value="{{ $animes->Status }}" placeholder="AMEII">
                </div>

                <div class="grid justify-center text-center">
                    <label for="Genre">Genêro</label>
                    <input name="Genre" id="Genre" type="text" value="{{ $animes->Genre }}" placeholder="AÇÃO">
                </div>
                <div class="grid justify-center text-center">
                    <label for="Sinopsis">Descrição</label>
                    <input name="Sinopsis" id="Sinopsis" type="text" value="{{ $animes->Sinopsis }}" placeholder="Anime top demais ">
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