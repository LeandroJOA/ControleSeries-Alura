<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Controle de Séries</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Séries</h1>
        </div>

        <a href="#" class="btn btn-dark mb-2">Adicionar</a>

        <ul class="list-group">
            <!-- Cria um item na lista para cada "serie", contida dentro de "series" -->
            <?php foreach ($series as $serie): ?>
                <li class="list-group-item"> <?= $serie; ?> </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>

