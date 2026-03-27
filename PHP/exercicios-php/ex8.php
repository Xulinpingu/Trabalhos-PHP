<!--
Data: 10/03/2026
Autor: Bruno L. de Lima; Isaac F. Quevedo
Objetivo:

Exercício 8 - Soma de 0 até N com Função
Crie uma função soma(n) que receba um número inteiro e retorne a soma de 0 até esse número.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <form action="ex8.php" class="form" method="POST">
        <label for="n">Digite o 1º número: </label>
        <input type="text" name="n">

        <button type="submit">Somar 0 até N</button>
    </form>

</body>
</html>

<?php

    function Soma($n) {
        $soma = 0;
        for($i = 1; $i <= $n; $i++){
            $soma += $i;
        }
        return $soma;
    }


    $n = $_POST["n"] ?? null;
    $soma = Soma($n);

    if($n != null){echo "$soma";}
?>