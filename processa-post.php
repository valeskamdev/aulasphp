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
    if(empty($_POST["nome"]) || empty($_POST["email"])) {
    ?>

    <p style="color: red;">Você tem que preecher tudo!</p>

    <?php
    }else {
    ?>


    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    ?>

    <h2>Dados recebidos</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>


        <?php if(!empty($assunto)) { ?>
        <li>Assunto: <?=$assunto?></li>
        <?php } ?>
        
        <?php if(!empty($mensagem)) { ?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php } ?>
    </ul>

    <?php
    }
    ?>

</body>
</html>