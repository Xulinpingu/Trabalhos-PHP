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