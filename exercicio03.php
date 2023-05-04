<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Exercicio 3</h1>
    <hr>

    <?php
        $salario = 2000;

        if($salario < 1500) {
            $novoSalario = $salario * 1.15;
        }elseif($salario <= 3000) {
            $novoSalario = $salario * 1.10;
        } else {
            $novoSalario = $salario * 1.05;
        }
    ?>

    <p>Salário antigo: <?=$salario?> | Salário atual: <?=$novoSalario?></p>
</body>
</html>