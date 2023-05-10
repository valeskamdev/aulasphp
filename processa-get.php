<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
    <h1>Processamento usando método GET</h1>
    <hr>

    <?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $assunto = $_GET['assunto'];
    $mensagem = $_GET['mensagem'];
    ?>

    <h2>Dados recebidos</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>
        <li>Assunto: <?=$assunto?></li>
        <li>Mensagem: <?=$mensagem?></li>
    </ul>

</body>
</html>