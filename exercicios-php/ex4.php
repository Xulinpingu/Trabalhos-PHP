<!--
Data: 06/03/2026
Autor: Bruno L. de Lima; Isaac F. Quevedo
Objetivo:

Exercício 4 - Triângulo Numérico

Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form action="ex4.php" class="form" method="POST">
        <label for="n">Digite um número: </label>
        <input type="text" name="n">

        <button type="submit">Fazer Triângulo</button>
    </form>


</body>
</html>

<?php

    $n = $_POST["n"] ?? null;

    for($i = 0; $i <= $n; $i++){
        echo "<p>\n</p>";
        for($x = 1; $x <= $i; $x++){
            echo "$x ";
        }
    }
?>