<!--
Data: 10/03/2026
Autor: Bruno L. de Lima; Isaac F. Quevedo
Objetivo:

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <form action="ex7.php" class="form" method="POST">
        <label for="n1">Digite o 1º número: </label>
        <input type="text" name="n1">
        <br>
        <label for="n2">Digite o 2º número: </label>
        <input type="text" name="n2">
        <br>
        <label for="n3">Digite o 3º número: </label>
        <input type="text" name="n3">
        <br>
        <label for="n4">Digite o 4º número: </label>
        <input type="text" name="n4">
        <br>
        <label for="n5">Digite o 5º número: </label>
        <input type="text" name="n5">
        <br>
        <label for="n6">Digite o 6º número: </label>
        <input type="text" name="n6">
        <br>
        <label for="n7">Digite o 7º número: </label>
        <input type="text" name="n7">
        <br>
        <label for="n8">Digite o 8º número: </label>
        <input type="text" name="n8">
        <br>
        <button type="submit">Separar positivos e negativos</button>
    </form>

</body>
</html>

<?php

    $n1 = $_POST["n1"] ?? null;
    $n2 = $_POST["n2"] ?? null;
    $n3 = $_POST["n3"] ?? null;
    $n4 = $_POST["n4"] ?? null;
    $n5 = $_POST["n5"] ?? null;
    $n6 = $_POST["n6"] ?? null;
    $n7 = $_POST["n7"] ?? null;
    $n8 = $_POST["n8"] ?? null;

    $lista_n = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8];
    $pos = [] ?? null;
    $neg = [] ?? null;

    foreach($lista_n as $n){
        if ($n > 0){
            $pos[] = $n;
        }
        else if($n < 0){
            $neg[] = $n;
        }
    }

    if($pos != null){echo "Positivos: ";}
    foreach($pos as $p){
        echo "$p; ";
    }

    echo "<br>";

    if($neg != null){echo "Negativos: ";}
    foreach($neg as $n){
        echo "$n; ";
    }
?>