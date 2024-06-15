<!DOCTYPE html>
<html lang="pt-br">

<head>
    <livewire:head />
    <title>VDO - Criar Lista</title>
</head>

<body>
    <livewire:header />

    <main class="container py-4">
        <div class="bg-dark p-5 rounded-4">
            <h3 class="text-center text-white p-2">Criar uma lista</h3>
            <form id="criar_lista" method="POST" action="" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col-md-4 mb-3">
                        <label for="listas_nome_input" class="form-label text-white">Nome da lista</label>
                        <input id="listas_nome_input" name="listas_nome" type="text" class="form-control" placeholder="Nome do Anime">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="listas__status_input" class="form-label text-white">Lista do Anime</label>
                        <select id="listas_status_input" name="listas_status" class="form-select">
                            <option value=""></option>
                            <option value="Irei acompanhar">Irei acompanhar</option>
                            <option value="Acompanhando">Acompanhando</option>
                            <option value="Pausado">Pausado</option>
                            <option value="Cancelado">Cancelado</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="listas_formato_input" class="form-label text-white">Formato</label>
                        <select id="listas_formato_input" name="listas_formato" class="form-select">
                            <option value="Variado">Variado</option>
                            <option value="Anime">Anime</option>
                            <option value="Livros">Livros</option>
                            <option value="Dorama">Dorama</option>
                            <option value="Séries">Séries</option>
                            <option value="Filmes">Filmes</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="listas_capa_input" class="form-label text-white">Imagem da lista</label>
                        <input id="listas_capa_input" name="listas_capa" type="file" class="form-control" placeholder="https://naruto.png">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="listas_descricao_input" class="form-label text-white">Descrição</label>
                        <input id="listas_descricao_input" name="listas_descricao" type="text" class="form-control" placeholder="Anime top demais">
                    </div>
                </div>

                <div class="text-center pt-3">
                    <x-button type="button" class="btn btn-primary" onclick="Adicionar_item()">Salvar</x-button>
                </div>
            </form>
        </div>
    </main>

    <section class="container-fluid px-5 py-3">
        <div class="bg-dark rounded-4 p-5 table-responsive">
            <h1 class="text-center font-bold text-white py-5">Minhas Listas</h1>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Nome da Lista</th>
                        <th>Status da Lista</th>
                        <th>Formato</th>
                        <th>Capa</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="table_myLists">

                </tbody>
            </table>
        </div>
    </section>

    <livewire:footer />

    <script src="{{ asset('assets/js/conteudoList.js') }}"></script>
</body>

</html>