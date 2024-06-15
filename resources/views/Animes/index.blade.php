<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <livewire:header />
    <main class="main">
            <div>
                <h1 class="text-center text-3xl	">Lista de Animes adicionados</h1>
            </div>
            <div>
            <a href="{{URL::route('animes.create')}}">
                <button class="button button:hover mt-2" type="button">Criar animes</button>
            </a>
            </div>
            <table class="table-auto mt-2 container grid-container-info-main mt-20">
            <thead>
                <tr>
                    <th class="text-white text-2xl">Nome</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach($animes as $anime)
                <tr>
                    <td>{{$anime->Name}}</td>
                    <td>
                        <div class="flex flex-row justify-center">
                            <div>
                                <a href="{{URL::route('animes.edit',[$anime->id])}}">
                                    <button class="button button:hover mt-2 text-xl" type="button">Detalhes</button>
                                </a>
                            </div>
                            <div>
                                <form action="{{ route('animes.destroy', [$anime->id]) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="button button:hover mt-2 text-xl">APAGAR</button>                                     
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>