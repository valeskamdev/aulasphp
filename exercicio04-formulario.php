<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário</title>
</head>
<body>
    <h1>Formulário HTML</h1>
    <hr>

    <form action="exercicio04-dados.php" method="post" autocomplete="off">
        <p>
            <label for="nome">Nome do produto:</label>
            <input type="text" name="nome" id="nome" required>
        </p>

        <?php 
        $fabricantes = ["Chevrolet ", "Volkswagen ", "Toyota  ", "Renault "]
        ?>

        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <option value=""></option>
                <?php 
                foreach($fabricantes as $fabricante) {
                ?>
                <option><?=$fabricante?></option>
                <?php
                }
                ?>
            </select>
        </p>

        <p>
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </p>

        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>

</body>
</html>