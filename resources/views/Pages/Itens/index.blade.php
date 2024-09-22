<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                <h1 class="fs-2 text-center font-bold mb-4">Itens</h1>
                    <a href="{{ route('admin.item.create') }}" class="btn btn-primary mb-4">Criar Itens</a>


                    <div class="row">
                        @foreach ($itens as $item)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    @if ($item->img_item)
                                        <img src="{{ URL::asset('images/' . $item->img_item) }}" class="card-img-top img-fluid" alt="{{ $item->nome_item }}" style="max-height: 150px; object-fit: cover;">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->nome_item }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="{{ route('admin.item.edit', $item->id_item) }}" class="btn btn-outline-primary">Editar</a>

                                                <form action="{{ route('admin.item.destroy', $item->id_item) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                                </form>
                                            </div>
                                            <small class="text-body-secondary text-right">
                                                {{ $item->created_at ? $item->updated_at->format('Y/m') : 'Data não disponível' }}
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