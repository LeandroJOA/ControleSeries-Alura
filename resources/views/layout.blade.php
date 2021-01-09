<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Controle de Séries</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            {{-- Substitui este @yield pelo conteudo da section "cabecalho" que extender este layout --}}
            <h1>@yield('cabecalho')</h1>
        </div>

        {{-- Substitui este @yield pelo conteudo da section "conteudo" que extender este layout --}}
        @yield('conteudo')
    </div>
</body>
</html>
