<!DOCTYPE html>
<html lang="pt-br">
<head>
    <livewire:head />
    <title>Acevo - Adicionar um item</title>
</head>
<body>
    <livewire:header />

    <main class="container-fluid py-3">
      <div class="bg-dark p-5 rounded-4">
        <H3 class="text-center text-white p-2">Adicionar conteúdo</H3>
        <form id="Adicionar_conteudo" method="POST" action="" enctype="multipart/form-data">

            <div class="row mb-3">
                <div class="col-md">
                    <label for="conteudo_nome_input" class="form-label text-white">*Nome</label>
                    <input id="conteudo_nome_input" name="conteudo_nome" type="text" class="form-control" placeholder="Nome do Anime">
                </div>

                <div class="col-lg">
                  <label for="conteudo_status_input" class="form-label text-white">*Status</label>
                  <select id="conteudo_status_input" name="conteudo_status" class="form-select">
                          <option value=""></option>
                          <option value="Assisitir">Assisitir</option>
                          <option value="Assistindo">Assistindo</option>
                          <option value="Pausado">Pausado</option>
                          <option value="Cancelado">Cancelado</option>
                  </select>
                </div>

                <div class="col-md">
                  <label for="conteudo_formato_input" class="form-label text-white">*Formato</label>
                  <select id="conteudo_formato_input" name="conteudo_formato" class="form-select">
                          <option value=""></option>
                          <option value="Anime">Anime</option>
                          <option value="Livros">Livros</option>
                          <option value="Dorama">Dorama</option>
                          <option value="séries">séries</option>
                          <option value="Filmes">Filmes</option>
                  </select>
                </div>
            </div>

            <div class="row mb-3">

                <div class="col-md">
                    <label for="conteudo_reacao_input" class="form-label text-white">Reação</label>
                    <input id="conteudo_reacao_input" name="conteudo_reacao" type="text" class="form-control" placeholder="AMEII">
                </div>
                <div class="col-md">
                    <label for="conteudo_genero_input" class="form-label text-white">Gênero</label>
                    <input id="conteudo_genero_input" name="conteudo_genero" type="text" class="form-control" placeholder="AÇÃO">
                </div>
                <div class="col-md">
                    <label for="conteudo_descricao_input" class="form-label text-white">Descrição</label>
                    <input id="conteudo_descricao_input" name="conteudo_descricao" type="text" class="form-control" placeholder="Anime top demais">
                </div>
            </div>

            <div class="row mb-3">
              <div class="col-md">
                <label for="conteudo_capa_input" class="form-label text-white">Capa</label>
                <input id="conteudo_capa_input" name="conteudo_capa" type="file" class="form-control">
              </div>

              <div class="col-md">
                  <label for="conteudo_quantidade_input" class="form-label text-white">Quantidade</label>
                  <input id="conteudo_quantidade_input" name="conteudo_quantidade" type="number" class="form-control" placeholder="23">
              </div>

              <div class="col-md">
                <label for="conteudo_link_input" class="form-label text-white">Link</label>
                <input id="conteudo_link_input" name="conteudo_link" type="text" class="form-control" placeholder="www.google.com">
              </div>
          </div>

            <div class="text-center pt-3">
                <x-button type="button" class="btn btn-primary" onclick="Adicionar_conteudo()">Salvar</x-button>
            </div>
        </form> 
      </div>
    </main>

    <section class="container-fluid px-5 py-3">
      <div class="bg-dark rounded-4 p-5 table-responsive">
          <h1 class="text-center font-bold text-white py-5">Animes adicionados</h1>
          <table class="table text-center">
            <thead>
              <tr>
                <th>Capa</th>
                <th>Nome da Lista</th>
                <th>Status da Lista</th>
                <th>Formato</th>
                <th>Descrição</th>
                <th>Gênero</th>
                <th>Reação</th>
                <th>Link</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody id="table_Conteudo">
  
            </tbody>
          </table>
      </div>
    </section>  

    <livewire:footer />

    <script src="{{ asset('assets/js/conteudoList.js') }}"></script>
</body>
</html>