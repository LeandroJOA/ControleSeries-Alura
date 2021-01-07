<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Séries</title>
</head>
<body>
    <ul>
        <!-- Cria um item na lista para cada "serie", contida dentro de "series" -->
        <?php foreach ($series as $serie): ?>
            <li> <?= $serie; ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

