<x-app-layout>
    <div class="p-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <a href="{{ url()->previous() }}" class="btn btn-secondary text-left">Voltar</a>
                    <h1 class="fs-2 text-center font-bold mb-4">Criando uma lista</h1>

                    <form action="{{ route('admin.lista.update', $lista->id_lista) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-4">
                            <!-- Título da Lista -->
                            <div class="col-md-4 mb-3">
                                <label for="nome_lista" class="form-label">Título da lista</label>
                                <input type="text" id="nome_lista" name="nome_lista" class="form-control @error('nome_lista') is-invalid @enderror" value="{{ $lista->nome_lista }}" required autofocus />
                                @error('nome_lista')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Descrição da Lista -->
                            <div class="col-md-4 mb-3">
                                <label for="descricao_lista" class="form-label">Descrição da lista</label>
                                <textarea id="descricao_lista" name="descricao_lista" class="form-control @error('descricao_lista') is-invalid @enderror">{{ $lista->descricao_lista }}</textarea>
                                @error('descricao_lista')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Capa da lista -->
                            <div class="col-md-4 mb-3">
                                <label for="img_lista" class="form-label">Capa da lista</label>
                                <input type="file" id="img_lista" name="img_lista" class="form-control @error('img_lista') is-invalid @enderror" accept="image/*">
                                @if($lista->img_lista)
                                    <img src="{{ asset('images/' . $lista->img_lista) }}" alt="Capa da Lista" width="100">
                                @endif
                                @error('img_lista')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <!-- Seleção de usuários -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="lista_id_user" :value="__('Usuários')" />
                                <select id="lista_id_user" name="lista_id_user" class="block mt-1 w-full">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ $lista->lista_id_user == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('lista_id_user')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Seleção de status -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="lista_id_status" :value="__('Status')" />
                                <select id="lista_id_status" name="lista_id_status" class="block mt-1 w-full">
                                    @foreach ($status_listas as $status)
                                        <option value="{{ $status->id_status_lista }}" {{ $lista->lista_id_status == $status->id_status_lista ? 'selected' : '' }}>
                                            {{ $status->tipo_status_lista }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('lista_id_status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Seleção de tipo -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="lista_id_tipo" :value="__('Tipo')" />
                                <select id="lista_id_tipo" name="lista_id_tipo" class="block mt-1 w-full">
                                    @foreach ($tipo_listas as $tipo)
                                        <option value="{{ $tipo->id_tipo_lista }}" {{ $lista->lista_id_tipo == $tipo->id_tipo_lista ? 'selected' : '' }}>
                                            {{ $tipo->nome_tipo_lista }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('lista_id_tipo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Atualizar Lista</button>
                            <a href="{{ route('admin.lista.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
