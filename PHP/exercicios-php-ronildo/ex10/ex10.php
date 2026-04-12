<?php

    $ano = $_POST["ano"] ?? null;

    if($ano != null){
        if($ano % 400 == 0 or $ano % 4 == 0 and $ano % 100 != 0){
            echo "O ano $ano, é Bissexto";
        }
        else{
            echo "O ano $ano, não é Bissexto";
        }
    }

?>