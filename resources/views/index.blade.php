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
        <div class="container grid-video">
            <div>
                <h1 class="text-4xl font-bold">Como funciona o vida de otaku ?</h1>
                <p class="text-medium mt-6 text-justify">
                    Vida de Otaku é um sistema de gerenciamento de lista de animes que ajuda os usuários
                    a organizar suas séries favoritas. Com recursos intuitivos e avançados, os usuários
                    podem adicionar novos animes, marcar as séries já assistidas e até mesmo criar listas
                    personalizadas. Com a Vida de Otaku, os amantes de anime têm uma ferramenta essencial
                    para manter suas listas organizadas e atualizadas.
                </p>
            </div>
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/vZYMZKvMpm8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="max-width: 100%;"></iframe>
            </div>
        </div>
        <div class="container ">
            <div class="grid-container-info-main mt-20">
                <div>
                    <figure class="">
                        <img src="{{env('APP_URL')}}/assets/img/item1.jpg" class="img-ilustration">
                    </figure>
                    <div class="px-4">
                        <h1 class="text-lg mt-6 font-bold">1. Adicione os animes</h1>
                        <p class="text-medium mt-6 text-justify">É possível fazer isso online de maneira simples. Basta selecionar, 
                        importar ou adicionar os animes de seu interesse para uma lista futura.
                        </p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="{{env('APP_URL')}}/assets/img/item2.jpg" class="img-ilustration">
                    </figure>
                    <div class="px-4">
                        <h1 class="text-lg mt-6 font-bold">2. Minha primeira Lista</h1>
                        <p class="text-medium mt-6 text-justify">Para criar uma lista, vá em “minha lista” , apenas selecione os que deseja e 
                        atribuir um nome para Lista.
                        </p>
                    </div>
                </div>
                <div>
                    <figure>
                        <img src="{{env('APP_URL')}}/assets/img/item3.jpg" class="img-ilustration">
                    </figure>
                    <div class="px-4">
                        <h1 class="text-lg mt-6 font-bold">3. Inove</h1>
                        <p class="text-medium mt-6 text-justify">Dica para organizar suas lista, faça os 
                            seguintes agrupamento: Assistindo, Pretendo Ver, Droppado, Pausado, Favoritos.
                        </p>
                    </div>
                </div>
                <div>
                    <figure class="">
                        <img src="{{env('APP_URL')}}/assets/img/item4.jpg" class="img-ilustration">
                    </figure>
                    <div class="px-4">
                        <h1 class="text-lg mt-6 font-bold">4. Exporte suas listass</h1>
                        <p class="text-medium mt-6 text-justify">
                            Atráves do vida de otaku, é possível exportar suas listas, 
                            caso queira migrar de plataforma 
                        </p>
                    </div>     
                </div> 
            </div>
            <div class="p-10 text-center">
                <x-Button>VAMOS COMEÇAR</x-Button>
            </div> 
        </div>
    </main>
    <livewire:footer />
</body>
</html>