<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                <h1 class="fs-2 text-center font-bold mb-4">Listas</h1>
                    <a href="{{ route('admin.lista.create') }}" class="btn btn-primary mb-4">Criar Listas</a>


                    <div class="row">
                        @foreach ($listas as $lista)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    @if ($lista->img_lista)
                                        <img src="{{ URL::asset('images/' . $lista->img_lista) }}" class="card-img-top img-fluid" alt="{{ $lista->nome_lista }}" style="max-height: 150px; object-fit: cover;">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $lista->nome_lista }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="{{ route('admin.lista.edit', $lista->id_lista) }}" class="btn btn-outline-primary">Editar</a>

                                                <form action="{{ route('admin.lista.destroy', $lista->id_lista) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                                </form>
                                            </div>
                                            <small class="text-body-secondary text-right">
                                                {{ $lista->created_at ? $lista->updated_at->format('Y/m') : 'Data não disponível' }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>