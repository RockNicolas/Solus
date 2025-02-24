<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="icon" href="{{ asset('images/Barra.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login</title>
</head>

<body>
    <div class="background-image">
        <!-- <img src="{{ asset('images/solus.jpg') }}" alt="Imagem de Fundo">  -->
    </div>

    <div class="container">
        <h2>Login</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="login-image">
            <img src="{{ asset('images/icon Solus.png') }}" alt="Imagem de Login">
        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Usuário" required value="{{ old('username') }}">

            <div class="password-container">
                <input type="password" id="password" name="password" placeholder="Senha" required>
                <i class="fas fa-eye show-password-icon" onclick="togglePassword()"></i>
            </div>
            <button type="submit">Entrar</button>
        </form>

        <p>Não tem uma conta? <a href="{{ route('register') }}">Cadastre-se</a></p>
    </div>

    <script src="{{ asset('Js/Password.js') }}"></script>
</body>
</html>
