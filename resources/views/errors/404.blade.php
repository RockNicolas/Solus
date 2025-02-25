<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Error/404.css') }}">
    <title>Página Não Encontrada - 404</title>
</head>
<body>
    <div class="notfoundContainer">
        <div class="notfoundContent">
            <h1 class="notfoundTitle">404</h1>
            <p class="notfoundSubtitle">Página Não Encontrada</p>
            <p class="notfoundText">Ops! A página que você procura não foi encontrada.</p>
            <a href="{{ url('/') }}" class="notfoundLink">Voltar para a Home</a>
        </div>
    </div>
</body>
</html>
