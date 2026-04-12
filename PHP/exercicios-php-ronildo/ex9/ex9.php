<?php

    function Media($v) {
        $med = null;
        foreach($v as $value){
            $med += $value;
        }
        if (count($v) != 0){
            $med /= count($v);
        }

        return $med;
    }

    $try_n1 = $_POST["n1"] ?? null;
    $lista_n = [];
    if (filter_var($try_n1, FILTER_VALIDATE_FLOAT) !== false){
        for ($i = 1; $i <= $n_media; $i++){
            $lista_n[] = $_POST["n$i"];
        }
    }

    $media = Media($lista_n);
    echo "$media";
?>