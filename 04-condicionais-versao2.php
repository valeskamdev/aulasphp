<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .normal {
            background-color: lightgreen;
            color: green;
        }

        .repor {
            background-color: lightpink;
            color: red;
        }

        .urgente {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Condicionais (Versão 2)</h1>
    <hr>

    <h2>Simples</h2>
    <?php
        $numero = 10;
        if($numero >= 5) {
    ?>
        <p>$numero é maior/igual a 5</p>
    <?php
        } 
    ?>

    <h2>Composta</h2>
    <?php
        $produto = "Bola";
        $qtdEmEstoque = 0;
        $qtdCritica = 5;
    ?>
        <h3>Produto: <?=$produto?></h3>
        <h4>Estoque: <?=$qtdEmEstoque?></h4>
    <?php
        if($qtdEmEstoque < $qtdCritica) {
    ?>
        <p class='repor'>É necessário comprar/repor!</p>
    <?php
        if($qtdEmEstoque == 0) {
    ?>
        <p><span class="urgente">URGENTE</span></p>
    <?php
        }
    } else {
    ?>
        <p class='normal'>Estoque normal.</p>
    <?php
        }
    ?>
    <h2>Encadeada</h2>
    <?php
        switch ($produto) {
            case "Ultrabook" : $garantia = 3; break;
            case "Geladeria" : $garantia = 5; break;
            case "TV" : $garantia = 2; break;
            default: $garantia = 1; break;
        }
    ?>
        <p>O <?=$produto?> tem garantia de <?=$garantia?> ano(s)</p>
</body>
</html>