<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciamento de Séries</title>
</head>
<body>
    <ul>
        <?php foreach ($series as $serie) :  ?>
            <li><?= $serie; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>