<!--
Data: 06/03/2026
Autor: Bruno L. de Lima; Isaac F. Quevedo
Objetivo:

Exercício 2 - Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

Fórmula: C = 5/9 × (F − 32)
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="ex2.php" class="form" method="POST">
        <label for="text">Qual a temperatura:</label>
        <input type="text" name="text">

        <button type="submit">Converter</button>
    </form>

<style>

</style>
</body>
</html>

<?php

    $text = $_POST["text"];

    if (str_contains($text, 'F')) {
        $temp = explode("F", $text);
        $cel = 5/9 * ($temp[0] - 32);
        echo "$cel °C";
    }
    elseif (str_contains($text, 'C')){
        $temp = explode("C", $text);
        $fah = ($temp[0] * 1.8) + 32;
        echo "$fah °F";
    }
    else{
        echo "especifique o tipo de temperatura";
    }

?>