<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <h1 class="fs-2 text-center font-bold mb-4">Editar Item</h1>
                    <form action="{{ route('admin.item.update', $itens->id_item) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-4">
                            <!-- Nome do Item -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="nome_item" :value="__('Nome do Item')" />
                                <x-text-input id="nome_item" class="block mt-1 w-full" type="text" name="nome_item" :value="old('nome_item', $itens->nome_item)" required />
                                <x-input-error :messages="$errors->get('nome_item')" class="mt-2" />
                            </div>

                            <!-- Descrição do Item -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="descricao_item" :value="__('Descrição do Item')" />
                                <x-text-input id="descricao_item" class="block mt-1 w-full" type="text" name="descricao_item" :value="old('descricao_item', $itens->descricao_item)" />
                                <x-input-error :messages="$errors->get('descricao_item')" class="mt-2" />
                            </div>

                            <!-- Checkbox para Publicidade -->
                            <div class="col-md-4 form-check mb-3 d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" id="is_public" name="is_public" value="1" {{ old('is_public', $itens->is_public) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_public">Este item é público?</label>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <!-- Seleção de Usuário -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="item_id_user" :value="__('Usuário')" />
                                <select id="item_id_user" name="item_id_user" class="form-select">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ old('item_id_user', $itens->item_id_user) == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('item_id_user')" class="mt-2" />
                            </div>

                            <!-- Seleção de Status -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="item_id_status" :value="__('Status')" />
                                <select id="item_id_status" name="item_id_status" class="form-select">
                                    @foreach ($status_itens as $status)
                                        <option value="{{ $status->id_status_item }}" {{ old('item_id_status', $itens->item_id_status) == $status->id_status_item ? 'selected' : '' }}>
                                            {{ $status->tipo_status_item }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('item_id_status')" class="mt-2" />
                            </div>

                            <!-- Seleção de Tipo -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="item_id_tipo" :value="__('Tipo')" />
                                <select id="item_id_tipo" name="item_id_tipo" class="form-select">
                                    @foreach ($tipo_itens as $tipo)
                                        <option value="{{ $tipo->id_tipo_item }}" {{ old('item_id_tipo', $itens->item_id_tipo) == $tipo->id_tipo_item ? 'selected' : '' }}>
                                            {{ $tipo->nome_tipo_item }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('item_id_tipo')" class="mt-2" />
                            </div>

                            <!-- Seleção de Autor -->
                            <div class="col-md-4 mb-3">
                                <x-input-label for="item_id_autor" :value="__('Autor')" />
                                <select id="item_id_autor" name="item_id_autor" class="form-select">
                                    @foreach ($autor_itens as $autor)
                                        <option value="{{ $autor->id_autor_item }}" {{ old('item_id_autor') == $autor->id_autor_item ? 'selected' : '' }}>
                                            {{ $autor->nome_autor_item }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('item_id_autor')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Imagem do Item -->
                        <div class="col-md-4 mb-3">
                            <x-input-label for="img_item" :value="__('Imagem do Item')" />
                            <input type="file" id="img_item" name="img_item" class="form-control @error('img_item') is-invalid @enderror">
                            <x-input-error :messages="$errors->get('img_item')" class="mt-2" />
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
