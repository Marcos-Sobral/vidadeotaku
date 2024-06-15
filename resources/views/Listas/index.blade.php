<!DOCTYPE html>
<html lang="pt-br">
<head>
    <livewire:head />
    <title>VDO - Minha Lista</title>
</head>

<body>
    <livewire:header />

    <section class="container-fluid px-5 py-3">
        <div class="bg-dark rounded-4 p-5 table-responsive">
            <h1 class="text-center font-bold text-white py-5">Minhas Listas</h1>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Capa</th>
                        <th>Nome da Lista</th>
                        <th>Status da Lista</th>
                        <th>Formato</th>
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

    <script src="{{ asset('assets/js/myLists.js') }}"></script>

</body>

</html>