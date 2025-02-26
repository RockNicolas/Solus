<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Login/Login.css') }}">
    <link rel="icon" href="{{ asset('images/Solus/Barra.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login</title>
</head>

<body>
    <div class="background-image">
        <img src="{{ asset('images/Solus/solus.jpg') }}" alt="Imagem de Fundo"> 
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
            <img src="{{ asset('images/Solus/icon Solus.png') }}" alt="Imagem de Login">
        </div>

                    <!-- Mexer aq(Router)--> 
        <form action="{{ route('home') }}" method="GET">
            @csrf
            <input type="text" name="username" placeholder="Usuário" required>
            <div class="password-container">
                <input type="password" id="password" name="password" placeholder="Senha" required>
                <i class="fas fa-eye show-password-icon" onclick="togglePassword()"></i>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
    
    <script src="{{ asset('Js/Login/Password.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</body>
</html>
