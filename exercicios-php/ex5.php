<!--
Data: 10/03/2026
Autor: Bruno L. de Lima; Isaac F. Quevedo
Objetivo:

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <form action="ex5.php" class="form" method="POST">
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
        <button type="submit">Fazer soma dos fatoriais</button>
    </form>

</body>
</html>

<?php

    $n1 = $_POST["n1"] ?? null;
    $n2 = $_POST["n2"] ?? null;
    $n3 = $_POST["n3"] ?? null;
    $n4 = $_POST["n4"] ?? null;
    $n5 = $_POST["n5"] ?? null;
    $lista_n = [$n1, $n2, $n3, $n4, $n5];

    $fat = 0;
    $soma = 0 ?? null;


    foreach($lista_n as $n){
        for($i = 1; $i <= $n; $i++){
            if($fat == 0 ){
                $fat = 1;
            }
            else{
                $fat *= $i;
            }
        }

        $soma += $fat;
        $fat = 0;
    }

    if($soma != null){
        echo "A soma dos fatoriais de $n1, $n2, $n3, $n4, $n5 é igual a $soma";
    }

?>