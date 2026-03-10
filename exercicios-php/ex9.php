<!--
Data: 10/03/2026
Autor: Bruno L. de Lima; Isaac F. Quevedo
Objetivo:

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)

Que receba uma lista de números reais e retorne a média aritmética.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <form action="ex9.php" class="form" method="POST">
        <label for="n_media">Quantos números você deseja fazer a média aritmética: </label>
        <input type="text" name="n_media">

        <button type="submit">Submit</button>
    </form>

    <?php

        $n_media = $_POST["n_media"];
        echo "<form action='ex9.php' class='form' method='POST'>";
        for ($i = 1; $i <= $n_media; $i++){
            echo "<br>";
            echo "<label for='n$i'>Digite o número $i: </label>";
            echo "<input type='text' name='n$i'>";
        }
        echo "<br>";
        if ($n_media != ''){
            echo "<input type='hidden' value='$n_media' name='n_media'>";
            echo "<button type='submit'>Fazer média</button>";
        }
        echo "</form>";

    ?>
<style>

</style>
</body>
</html>

<?php

    function Media($v) {
        $med = null;
        foreach($v as $value){
            $med += $value;
        }
        if (count($v) != 0){
            $med /= count($v);
        }

        return $med;
    }

    $try_n1 = $_POST["n1"] ?? null;
    $lista_n = [];
    if (filter_var($try_n1, FILTER_VALIDATE_FLOAT) !== false){
        for ($i = 1; $i <= $n_media; $i++){
            $lista_n[] = $_POST["n$i"];
        }
    }

    $media = Media($lista_n);
    echo "$media";
?>