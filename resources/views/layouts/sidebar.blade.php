<div class="bg-gray-800 text-white w-full min-h-screen">
    <!-- Título da página atual -->
    <div class="p-6">
        <!-- Informações do usuário -->
        <div class="flex items-center mt-4">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            <!-- <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"> -->
            <div class="ml-3">
                <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                <p class="text-xs text-gray-400">Administrador</p>
            </div>
        </div>
    </div>

    <hr class="mb-6">

    <!-- Menus -->
    <nav class="mt-5">
        <a href="{{ route('dashboard') }}" class="flex align-items-center py-2 px-4 rounded hover:bg-gray-700 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700" >
            <img src="{{ URL::asset('assets/img/icon/icons8-user-folder-50.png') }}" class="mr-2  w-6 h-6">
            Carrossel
        </a>

        <!-- Gestão de pessoas-->
        <div x-data="{ open: false }" class="mt-2">
            <button @click="open = ! open" class="w-full flex justify-between items-center block py-2 px-4 rounded hover:bg-gray-700 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <img src="{{ URL::asset('assets/img/icon/icons8-users-30.png') }}" class="mr-2 w-6 h-6">
                <span>Gestão de pessoas</span>
                <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" class="w-4 h-4">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-2 pl-4">
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">            
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-folder-50.png') }}" class="mr-2 w-6 h-6">
                    Usuários
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-shield-50.png') }}" class="mr-2 w-6 h-6">
                    Nível de acesso
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-analyzing-skill-50.png') }}" class="mr-2 w-6 h-6">
                    Relatório de usuários
                </a>
            </div>
        </div>

        <!-- Gestão de conteudo -->
        <div x-data="{ open: false }" class="mt-2">
            <button @click="open = ! open" class="w-full flex justify-between items-center block py-2 px-4 rounded hover:bg-gray-700 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <img src="{{ URL::asset('assets/img/icon/icons8-file-64.png') }}" class="mr-2 w-6 h-6">
                <span>Gestão dos itens</span>
                <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" class="w-4 h-4">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-2 pl-4">
                <a href="{{ route('admin.item.index') }}" class="flex py-2 px-6 hover:bg-gray-700 rounded">            
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-folder-50.png') }}" class="mr-2 w-6 h-6">
                    Conteúdo
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">            
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-folder-50.png') }}" class="mr-2 w-6 h-6">
                    Sub Conteúdo
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-shield-50.png') }}" class="mr-2 w-6 h-6">
                    Gênero
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-shield-50.png') }}" class="mr-2 w-6 h-6">
                    Autor
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-shield-50.png') }}" class="mr-2 w-6 h-6">
                    Status
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-shield-50.png') }}" class="mr-2 w-6 h-6">
                    Tipo
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-analyzing-skill-50.png') }}" class="mr-2 w-6 h-6">
                    Relatório de conteúdo
                </a>
            </div>
        </div>

        <!-- gestão de lista -->
        <div x-data="{ open: false }" class="mt-2">
            <button @click="open = ! open" class="w-full flex justify-between items-center block py-2 px-4 rounded hover:bg-gray-700 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <img src="{{ URL::asset('assets/img/icon/icons8-list-50.png') }}" class="mr-2 w-6 h-6">
                <span>Gestão das Listas</span>
                <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" class="w-4 h-4">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-2 pl-4">
                @auth
                    
                
                <a href="{{ route('admin.lista.index') }}" class="flex py-2 px-6 hover:bg-gray-700 rounded">            
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-folder-50.png') }}" class="mr-2 w-6 h-6">
                    Lista
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-shield-50.png') }}" class="mr-2 w-6 h-6">
                    Status
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-user-shield-50.png') }}" class="mr-2 w-6 h-6">
                    Tipo
                </a>
                <a href="#" class="flex py-2 px-6 hover:bg-gray-700 rounded">
                    <img src="{{ URL::asset('assets/img/icon/icons8-analyzing-skill-50.png') }}" class="mr-2 w-6 h-6">
                    Relatório das listas
                </a>
            </div>
            @endauth
        </div>

        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700 mt-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            Configurações
        </a>
    </nav>
</div>
