<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/Header/Header.css') }}">
  <link rel="icon" href="{{ asset('images/Solus/Barra.png') }}" type="image/x-icon">
  <title>Solus</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <header>
    <div class="logo-container" onclick="toggleMenu()">
      <a>
        <img id="logo" class="rotate" src="{{ asset('images/Solus/Barra.png') }}" alt="Ícone" width="42" height="42">
      </a>
      <div class="dropdown-menu">
        <a href=>Perfil</a>
        <a href=>Configurações</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>

    <div class="user-info">
      @if(auth()->check())
        <!-- Usuário logado: exibe o gravatar e o nome -->
        <img src="https://www.gravatar.com/avatar/{{ md5(auth()->user()->email) }}" alt="Usuário">
        <span>{{ auth()->user()->name }}</span>
      @else
        <a href="{{ route('login') }}" class="user-login">
          <img src="{{ asset('images/User/Icon1.png') }}" alt="Ícone Usuário">
          Entrar
        </a>
      @endif
    </div>
  </header>

  <div class="content">
    @yield('content')
  </div>
  <script src="{{ asset('Js/Header/Header.js') }}"></script>
</body>
</html>
