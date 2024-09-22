<x-app-layout>
    <div class="p-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                <a href="{{ url()->previous() }}" class="btn btn-secondary text-left">Voltar</a>
                    <h1 class="fs-2 text-center font-bold mb-4">Criando uma lista</h1>

                    <form action="{{ route('admin.lista.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <!-- Título do Carrossel -->
                            <div class="col-md-4 mb-3">
                                <label for="nome_lista" class="form-label">Título da lista</label>
                                <input type="text" id="nome_lista" name="nome_lista" class="form-control @error('nome_lista') is-invalid @enderror" value="{{ old('nome_lista') }}" required>
                                @error('nome_lista')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Descrição do Carrossel -->
                            <div class="col-md-4 mb-3">
                                <label for="descricao_lista" class="form-label">Descrição da lista</label>
                                <textarea id="descricao_lista" name="descricao_lista" class="form-control @error('descricao_lista') is-invalid @enderror">{{ old('descricao_lista') }}</textarea>
                                @error('descricao_lista')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                             <!-- Capa da lista -->
                            <div class="col-md-4 mb-3">
                                <label for="img_lista" class="form-label">Capa da lista</label>
                                <input type="file" id="img_lista" name="img_lista" class="form-control @error('img_lista') is-invalid @enderror" accept="image/*">
                                @error('img_lista')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <!-- Seleção de user -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="name_user" :value="__('Usuários')" />
                                <select id="name_user" name="name_user" class="block mt-1 w-full bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-900 rounded-md shadow-sm">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->name}}" {{ old('name_user') == $user->name_user ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('id_user')" class="mt-2" />
                            </div>

                            <!-- Seleção de status -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="tipo_status_lista_status" :value="__('Status')" />
                                <select id="tipo_status_lista_status" name="tipo_status_lista_status" class="block mt-1 w-full bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-900 rounded-md shadow-sm">
                                    @foreach ($status_listas as $status)
                                        <option value="{{ $status->tipo_status_lista}}" {{ old('tipo_status_listas') == $user->tipo_status_lista ? 'selected' : '' }}>
                                            {{ $status->tipo_status_lista }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('id_user')" class="mt-2" />
                            </div>

                            <!-- Seleção de tipo -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="nome_tipo_lista_user" :value="__('Tipo')" />
                                <select id="nome_tipo_lista_tipo" name="nome_tipo_lista_tipo" class="block mt-1 w-full bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-900 rounded-md shadow-sm">
                                    @foreach ($tipo_listas as $tipo)
                                        <option value="{{ $tipo->nome_tipo_lista}}" {{ old('nome_tipo_lista_tipo') == $tipo->nome_tipo_lista_tipo ? 'selected' : '' }}>
                                            {{ $tipo->nome_tipo_lista }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('id_tipo')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Criar Carrossel</button>
                            <a href="{{ route('admin.lista.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>