<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="background-image">
      <!--  <img src="{{ asset('images/solus.jpg') }}" alt="Imagem de Fundo">  -->
    </div>

    <div class="container">
        <h2>Login</h2>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <div class="login-image">
            <img src="{{ asset('images/icon Solus.png') }}" alt="Imagem de Login">
        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

        <p>Não tem uma conta? <a href="{{ route('register') }}">Cadastre-se</a></p>
    </div>
</body>
</html>
