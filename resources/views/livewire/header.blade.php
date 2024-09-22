<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid d-flex justify-content-between align-items-center mx-5 my-3">
      <a class="navbar-brand d-flex align-items-center text-white" href="{{ URL::route('vdo.sobre') }}">
        <img src="{{ URL::asset('assets/img/logo/1.png') }}" alt="Logo" width="50" height="50" class="d-inline-block align-text-top rounded-circle me-2">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ URL::route('vdo.sobre') }}">Acervo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ URL::route('vdo.sobre') }}">Minhas Listas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ URL::route('dashboard') }}">sobre o VDO</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gerenciamento
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item fw-bold" href="{{ URL::route('vdo.sobre'); }}">Criar uma lista</a></li>
              <li><a class="dropdown-item fw-bold" href="{{ URL::route('vdo.sobre'); }}">Adicionar item na lista</a></li>
            </ul>
          </li>

          @if (Route::has('login'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Minha conta
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              @auth
              @if (Auth::user()->is_admin) <!-- Verifica se o usuário é administrador -->
              <a href="{{ url('/dashboard') }}" class="dropdown-item fw-bold">Administração</a>
              @else
              <!-- Exibe o nome do usuário e a opção de sair -->
              <a class="dropdown-item fw-bold">{{ Auth::user()->name }}</a>
              <!-- Logout -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a :href="route('logout')" onclick="event.preventDefault();
                                              this.closest('form').submit();" class="dropdown-item fw-bold">
                  {{ __('Sair da conta') }}
                </a>
              </form>
              @endif
              @else
              <a href="{{ route('login') }}" class="dropdown-item fw-bold">Entrar na conta</a>

              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="dropdown-item fw-bold">Criar uma conta</a>
              @endif
              @endauth
          </li>
          @endif
        </ul>
      </div>

    </div>
  </nav>
</header>