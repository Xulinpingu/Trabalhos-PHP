<!--
Data: 10/03/2026
Autor: Bruno L. de Lima; Isaac F. Quevedo
Objetivo:

Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.

Um ano é bissexto se:

É múltiplo de 400
ou
É múltiplo de 4 e não é múltiplo de 100
-->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <form action="ex10.php" class="form" method="POST">
        <label for="ano">Ano: </label>
        <input type="text" name="ano">

        <button type="submit">Verificar se o ano é bissexto</button>
    </form>

<style>

</style>
</body>
</html>

<?php

    $ano = $_POST["ano"];

    if($ano % 400 == 0 or $ano % 4 == 0 and $ano % 100 != 0){
        echo "O ano $ano, é Bissexto";
    }
    else{
        echo "O ano $ano, não é Bissexto";
    }

?>