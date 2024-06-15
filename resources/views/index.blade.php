<!DOCTYPE html>
<html lang="pt-br">
<head>
    <livewire:head />
    <title>Vida de otaku - Principal</title>
</head>
<body>
    <livewire:header />

    <section class="container-fluid px-5 pt-5">
        <div class="row bg-dark p-3">
            <div class="col-lg-5">
                <h1 class="font-bold text-white">Como funciona o vida de otaku ?</h1>
                <p class="text-medium mt-2 text-white">
                    Vida de Otaku é um sistema de gerenciamento de lista de animes que ajuda os usuários
                    a organizar suas séries favoritas. Com recursos intuitivos e avançados, os usuários
                    podem adicionar novos animes, marcar as séries já assistidas e até mesmo criar listas
                    personalizadas. Com a Vida de Otaku, os amantes de anime têm uma ferramenta essencial
                    para manter suas listas organizadas e atualizadas.
                </p>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/vZYMZKvMpm8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="max-width: 100%;"></iframe>
            </div>
        </div>
     </section>   

     <section class="container-fluid p-4">
        <div class="bg-dark py-5 px-3">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <figure class="text-center">
                        <img src="https://img.freepik.com/vector-gratis/ilustracion-otaku-dibujada-mano_23-2149662516.jpg?w=740&t=st=1682821566~exp=1682822166~hmac=b808801936dd5e05cca195f73e93e00fba84d40256df945f1503c52a6c11fd6b" class="img-ilustration img-thumbnail">
                    </figure>
                    <div class="px-4">
                        <h1 class="text-lg mt-6 font-bold text-white">1. Adicione os animes</h1>
                        <p class="text-medium mt-6 text-justify text-white">É possível fazer isso online de maneira simples. Basta selecionar, 
                        importar ou adicionar os animes de seu interesse para uma lista futura.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <figure class="text-center">
                        <img src="https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-do-aplicativo-do-curso_114360-6649.jpg?w=740&t=st=1682823209~exp=1682823809~hmac=ce5d12217cc0f396df07d46e8edeac1a6fcf36abbb74bea823b5cb92fce887f9" class="img-ilustration img-thumbnail">
                    </figure>
                    <div class="px-4">
                        <h1 class="text-lg mt-6 font-bold text-white">2. Minha primeira Lista</h1>
                        <p class="text-medium mt-6 text-justify text-white">Para criar uma lista, vá em “minha lista” , apenas selecione os que deseja e 
                        atribuir um nome para Lista.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <figure class="text-center">
                        <img src="https://img.freepik.com/free-vector/video-tutorial-watching-online-lecture-internet-course-digital-lesson-tutor-cartoon-character-video-call-seminar-remote-education_335657-3439.jpg?w=740&t=st=1682822460~exp=1682823060~hmac=47d4b1e5d3796866ba7064e9f4c59b49e8232d9367c8430c3a2863d31cbab48f" class="img-ilustration img-thumbnail">
                    </figure>
                    <div class="px-4">
                        <h1 class="text-lg mt-6 font-bold text-white">3. Inove</h1>
                        <p class="text-medium mt-6 text-justify text-white">Dica para organizar suas lista, faça os 
                            seguintes agrupamento: Assistindo, Pretendo Ver, Droppado, Pausado, Favoritos.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <figure class="text-center">
                        <img src="https://img.freepik.com/free-vector/photo-sharing-concept-illustration_114360-425.jpg?w=740&t=st=1682822659~exp=1682823259~hmac=02313a25185eb2f1e2532001975cecdb73aa7ceecc0a3bf01b4f04e63ee8dc4f" class="img-ilustration img-thumbnail">
                    </figure>
                    <div class="px-4">
                        <h1 class="text-lg mt-6 font-bold text-white">4. Exporte suas listas</h1>
                        <p class="text-medium mt-6 text-justify text-white">
                            Através do vida de otaku, é possível exportar suas listas, 
                            caso queira migrar de plataforma 
                        </p>
                    </div>     
                </div> 
            </div>
            <div class="p-1 text-center">
                <a href="createList.html">
                    <x-Button>VAMOS COMEÇAR</x-Button>
                </a>
            </div> 
        </div>
    </section>
    <livewire:footer />
</body>
</html>