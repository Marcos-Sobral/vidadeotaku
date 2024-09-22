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
                            <!-- Título do Listas-->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="nome_lista" :value="__('Título da lista')" />
                                <x-text-input id="nome_lista" class="block mt-1 w-full" type="text" name="nome_lista" value="{{ old('nome_lista') }}" />
                                <x-input-error :messages="$errors->get('nome_lista')" class="mt-2" />
                            </div>

                            <!-- Descrição do Lista -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="descricao_lista" :value="__('Descrição da lista')" />
                                <x-text-input id="descricao_lista" class="block mt-1 w-full" type="text" name="descricao_lista" value="{{ old('descricao_lista') }}" />
                                <x-input-error :messages="$errors->get('descricao_lista')" class="mt-2" />
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
                                <label for="lista_id_user" class="form-label">Projeto Associado</label>
                                <select id="lista_id_user" name="lista_id_user" class="form-select @error('lista_id_user') is-invalid @enderror" required>
                                <option value="">Selecione um projeto</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ old('lista_id_user') == $user->id ? 'selected' : '' }}>
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
                                <label for="lista_id_user" class="form-label">Status</label>
                                <select id="lista_id_status" name="lista_id_status" class="form-select @error('lista_id_status') is-invalid @enderror">
                                    @foreach ($status_listas as $status)
                                        <option value="{{ $status->id_status_lista }}" {{ old('lista_id_status') == $status->id_status_lista ? 'selected' : '' }}>
                                            {{ $status->tipo_status_lista }}
                                        </option>
                                    @endforeach
                                </select>

                                <x-input-error :messages="$errors->get('tipo_status_lista')" class="mt-2" />
                            </div>

                            <!-- Seleção de tipo -->
                            <div class="col-md-4 mb-3">
                                <label for="lista_id_user" class="form-label">Tipo</label>
                                <select id="lista_id_tipo" name="lista_id_tipo" class="form-select @error('lista_id_tipo') is-invalid @enderror">
                                    @foreach ($tipo_listas as $tipo)
                                        <option value="{{ $tipo->id_tipo_lista }}" {{ old('lista_id_tipo') == $tipo->id_tipo_lista ? 'selected' : '' }}>
                                            {{ $tipo->nome_tipo_lista }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('lista_id_tipo')" class="mt-2" />
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