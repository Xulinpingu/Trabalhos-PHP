<?php

    $n1 = $_POST["n1"] ?? null;
    $n2 = $_POST["n2"] ?? null;
    $n3 = $_POST["n3"] ?? null;
    $n4 = $_POST["n4"] ?? null;
    $n5 = $_POST["n5"] ?? null;
    $n6 = $_POST["n6"] ?? null;
    $n7 = $_POST["n7"] ?? null;
    $n8 = $_POST["n8"] ?? null;

    $lista_n = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8];
    $pos = [] ?? null;
    $neg = [] ?? null;

    foreach($lista_n as $n){
        if ($n > 0){
            $pos[] = $n;
        }
        else if($n < 0){
            $neg[] = $n;
        }
    }

    if($pos != null){echo "Positivos: ";}
    foreach($pos as $p){
        echo "$p; ";
    }

    echo "<br>";

    if($neg != null){echo "Negativos: ";}
    foreach($neg as $n){
        echo "$n; ";
    }
?>