<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/Barra.png') }}" type="image/x-icon">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    
    <div class="container">
        <div class="background-image">
          <img src="{{ asset('images/solus.jpg') }}" alt="Imagem de Fundo"> 
        </div>
        <h2>Cadastro</h2>
        
        <div class="login-image">
            <img src="{{ asset('images/icon Solus.png') }}" alt="Imagem de Login"> 
        </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Usuário" value="{{ old('username') }}" required>
            @error('username')
                <div class="error-message">{{ $message }}</div>
            @enderror
        
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <input type="password" name="password" placeholder="Senha" required>
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <input type="password" name="password_confirmation" placeholder="Confirme sua senha" required>
            @error('password_confirmation')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <button type="submit">Cadastrar</button>
        </form>

        <p>Já tem uma conta? <a href="{{ route('login') }}">Faça login</a></p>
    </div>
</body>
</html> -->
