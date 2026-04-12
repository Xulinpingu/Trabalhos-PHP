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