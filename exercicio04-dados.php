<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>

<body>
    <h1>Processamento usando método GET</h1>
    <hr>

    <?php
    if(empty($_POST["nome"]) || empty($_POST["fabricante"]) || empty($_POST["preco"])) {
    ?>

    <p style="color: red;">Você tem que preecher tudo!</p>
        <button><a href="exercicio04-formulario.php"> <-- Voltar ao formulário</a></button>
    <?php
    }else {
    ?>

    <?php
    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $precoFormatado = number_format($preco, 2, ",", ".");
    
    ?>

    <h2>Dados recebidos</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Fabricante: <?=$fabricante?></li>
        <li>Preço: R$ <?=$precoFormatado?></li>
        <li>Descrição: <?=$descricao?></li>
    </ul>

    <?php
    }
    ?>
</body>

</html>