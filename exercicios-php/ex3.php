<!--
Data: 06/03/2026
Autor: Bruno L. de Lima; Isaac F. Quevedo
Objetivo:

Exercício 3 - Calculadora Aritmética

Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form action="ex3.php" class="form" method="POST">
        <label for="conta">Digite uma conta de 2 números e 1 operador: </label>
        <input type="text" name="conta">

        <button type="submit">Fazer conta</button>
    </form>

<style>

</style>
</body>
</html>

<?php

    $conta = $_POST["conta"];
    $res = null;

    if (str_contains($conta, '+')) {
        $temp = explode("+", $conta);
        $res = $temp[0] + $temp[1];
    }
    elseif (str_contains($conta, '-')){
        $temp = explode("-", $conta);
        $res = $temp[0] - $temp[1];
    }
    elseif (str_contains($conta, '*')){
        $temp = explode("*", $conta);
        $res = $temp[0] * $temp[1];

    }
    elseif (str_contains($conta, '/')){
        $temp = explode("/", $conta);
        $res = $temp[0] / $temp[1];
    }

    if ($res != null){
        echo "O resultado é igual a $res";
    }
    else{
        echo "não foi colocado uma conta de acordo com as especificações";
    }

?>