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