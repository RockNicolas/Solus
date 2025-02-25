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
    <div>
      <a href="{{ route('home') }}">
        <img src="{{ asset('images/Solus/Barra.png') }}" alt="Ícone" width="42" height="42">
      </a>
    </div>
    <div class="user-info">
      @if(auth()->check())
        <!-- Usuário logado: exibe o gravatar e o nome -->
        <img src="https://www.gravatar.com/avatar/{{ md5(auth()->user()->email) }}" alt="Usuário">
        <span>{{ auth()->user()->name }}</span>
        <!-- Dropdown ao passar o mouse -->
        <div class="dropdown-menu">
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             Sair
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          <a href="{{ route('login') }}">Entrar com outra conta</a>
        </div>
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
</body>
</html>
