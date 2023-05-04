<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2</h1>
    <hr>

    <?php
        const DADOS = [
            "nome" => "Gabriel",
            "senha" => "gbr123",
            "idade" => "20",
            "cidade" => " São Paulo"
        ];
    ?>

    <ol>
        <li><?=DADOS["nome"]?></li>
        <li><?=DADOS["idade"]?></li>
        <li><?=DADOS["cidade"]?></li>
    </ol>
</body>
</html>