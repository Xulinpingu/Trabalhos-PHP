<!--
Data: 06/03/2026
Autor: Bruno L. de Lima; Isaac F. Quevedo
Objetivo:

Exercício 1 - Intervalo entre 100 e 200
Faça um programa que receba um número e diga se este número está no intervalo entre 100 e 200.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="ex1.php" class="form" method="POST">
        <label for="n1">Número 1:</label>
        <input type="text" name="n1">

        <button type="submit">Ver se está entre 100 e 200</button>
    </form>

</body>
</html>

<?php

    $n1 = $_POST["n1"] ?? null;

    if ($n1 !== null) {
        if($n1 > 100 && $n1 < 200){
            echo "O número $n1 está entre 100 e 200";
        }
        else{
            echo "O número $n1 não está entre 100 e 200";
        }
    }

?>