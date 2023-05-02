<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>

<body>
    <h1>Usando variáveis e constantes</h1>
    <hr>

    <h2>Variáveis</h2>

    <?php
        $curso = "Programador Web";
        $ano = 2023;
        $preco = 1278.75;
        $area = 'Back-End';

        echo "<h2>Exemplos de saídas usando varáveis</h2>";
        echo '<p>$curso</p>';

        // saida usando concatenação (ponto .)
        echo "<p><i>".$curso."</i></p>";
    ?>

    <h2>Saída usando versão simplicada do PHP</h2>

    <!-- Tradicional -->
    <?php
        echo "<p>Estamos em $ano estudando $area</p>"
    ?>

    <!-- Moderna/Shorthand -->
    <p>Estamos em <?=$ano?> estudando <?=$area?></p>

    <h2>Constantes</h2>

    <?php
    //sintaxe tradicional
    define("AUTOR", "Gabriel da Silva");
    define("JUROS", 10);

    //sintaxe moderna
    const EMPRESA = "ABC Tecnologia";
    ?>

    <p>Autor do site: <?=AUTOR?></p>
    <p>Taxa de juros: <?=JUROS?>% em <?=$ano?></p>
    <p>Prestador de serviços: <?=EMPRESA?></p>


</body>

</html>