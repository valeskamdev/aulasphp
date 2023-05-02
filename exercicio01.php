<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1</h1>
    <hr>

    <?php
    const NOME = "Gabriel";
    const CURSO = "Gastronomia";
    const CARGA_HORARIA = 397;
    const LIMITE_FALTAS = CARGA_HORARIA / 4;
    ?>

    <p>O aluno <b><?=NOME?></b>, que faz o curso de <b><?=CURSO?></b> com carga horária de <b><?=CARGA_HORARIA?></b>h tem o limite da faltas de <b><?=LIMITE_FALTAS?></b> para esse curso</p>
</body>
</html>