<!--
Data: 10/03/2026
Autor: Bruno L. de Lima; Isaac F. Quevedo
Objetivo:


Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.

Exemplo:
n = 12
Resultado:
0 1 1 2 3 5 8 13 21 34 55 89
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    
    <form action="ex6.php" class="form" method="POST">
        <label for="n">Digite um número: </label>
        <input type="text" name="n">
        
        <button type="submit">Mostrar os numeros de Fibonacci</button>
    </form>

</body>
</html>

<?php

    $n = $_POST["n"] ?? null;

    $fib = 0;
    $fib1 = 0;
    $fib2 = 1;

    for($i = 1; $i <= $n; $i++){
        echo "$fib ";
        $fib = $fib1 + $fib2;

        $fib2 = $fib1;
        $fib1 = $fib;
    }

?>