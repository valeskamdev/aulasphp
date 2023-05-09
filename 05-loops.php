<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <h1>Loops (ou laços de repetições)</h1>
    <hr>

    <h2>while (enquanto)</h2>
    <?php
    $i = 1;

    while ($i <=  5) {

    ?>
        <p>Senac Penha - PHP (i vale <?= $i ?>)</p>
    <?php
        $i++;
    }
    ?>

    <hr>
    <h2>do/while</h2>

    <ul>
        <?php
        $j = 1;

        do {
        ?>

            <li>PHP</li>

        <?php
            $j++;
        } while ($j <= 5)
        ?>
    </ul>

    <hr>
    <h2>for</h2>

    <?php
    $bandas = ["Pink Floyd", "Savatage", "Slayer"];
    ?>

    <section>
        <h3>Bandas</h3>

        <?php
        for ($k = 0; $k < count($bandas); $k++) {
        ?>

            <p><?= $bandas[$k] ?></p>

        <?php
        }
        ?>

    </section>

    <hr>
    <h2>Exercício: lista de meses</h2>
    <p>Crie uma array contendo a lista de todos os meses do ano.</p>
    <p>Monte uma <b>lista ordenada</b> e, usando um <b>LOOP</b>, faça com que ela mostre o nome de cada mês.</p>

    <?php
    const MESES = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    ?>


    <ol>
        <?php
        for($i = 0; $i < count(MESES); $i++) {
        ?>
        <li><?=MESES[$i]?></li>
        <?php
        }
        ?>
    </ol>

    <h2>foreach</h2>

    <?php
    foreach ($bandas as $banda) {
    ?>
        <p>Banda: <b><?=$banda?></b></p>
    <?php
    }
    ?>

</body>

</html>