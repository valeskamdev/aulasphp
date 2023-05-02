<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array (vetores ou matrizes)</h1>
    <hr>

    <h2>Array com índice numérico</h2>
    <?php
        $bandas = ["Rush", "Slayer", "Iron Maiden"];
        $cursos = array("HTML5", "PHP", "design", "JS");

        const UNIDADE_SENAC = ["Penha", "Itaquera"];
        define("UNIDADE_SESC", ["Belenzinho", "Bertioga"]);
    ?>

    <h3>Saída de dados</h3>
    <ul>
        <li>Banda que mais gosto: <?=$bandas[0]?></li>
        <li>Assunto estudados: <?=$cursos[1]?></li>
        <li>Estamos no Senac <?=UNIDADE_SENAC[0]?></li>
        <li>O Sesc <?=UNIDADE_SESC[1]?> é uma colônia de férias</li>
    </ul>

    <h2>Array Associativo</h2>
    <!-- chaves associativas -->
    <?php
        $livro = [
            "titulo" => "Senho dos Anéis",
            "autor" => "J.R.R Tolkien",
            "ano" => 1954
        ];
    ?>

    <p>Livro : <?=$livro["titulo"]?></p>
    <p>Escrito por: <?=$livro["autor"]?> em <?=$livro["ano"]?></p>

    <?php
        echo $livro["titulo"];
        // echo "<p>$livro["titulo"]</p>"; (erro)
        // echo "<p>$livro['titulo']</p>";  (erro)
        // echo "<p>$livro[\"titulo\"]</p>";  (erro)

        //PHP COM CONCATENAÇÃO, OK! (EVITAR SE POSSÍVEL)
        echo "<p>".$livro["titulo"]."</p>";

        // PHP COM ARRAY ENTRE {}, OK! (EVITAR)
        echo "<p>{$livro["titulo"]}</p>";
    ?>

    <h2>Analizando estrutura de arrays usando "print_r() e "var_dump()"</h2>

    <?=print_r($bandas)?>
    <br><br><br>
    <?=var_dump($bandas)?>

    <pre><?=print_r($bandas)?></pre>
    <pre><?=var_dump($bandas)?></pre>
    


</body>
</html>