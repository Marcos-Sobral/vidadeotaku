<div class="bg-gray-800 text-white w-full min-h-screen">
    <!-- Título da página atual -->
    <div class="p-4">

        <div class="pt-2 pb-3 space-y-1">
            <h1 class="text-sm font-medium">Página atual:</h1>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Informações do usuário -->
        <div class="flex items-center mt-4">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            <!-- <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"> -->
            <div class="ml-3">
                <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                <p class="text-xs text-gray-400">Administrador</p>
            </div>
        </div>

        <!-- Botão de sair da conta -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left py-2.5 px-4 mt-4 rounded hover:bg-gray-700">
                Sair da Conta
            </button>
        </form>
    </div>

    <!-- Menus -->
    <nav class="mt-5">
        <a href="{{ route('dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">
            Home
        </a>

        <!-- Menu com Submenu -->
        <div x-data="{ open: false }" class="mt-2">
            <button @click="open = ! open" class="w-full flex justify-between items-center py-2.5 px-4 hover:bg-gray-700 rounded">
                <span>Gerenciamento</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-2 pl-4">
                <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Usuários</a>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Projetos</a>
                <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Relatórios</a>
            </div>
        </div>

        <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700 mt-2">
            Configurações
        </a>
    </nav>
</div>
