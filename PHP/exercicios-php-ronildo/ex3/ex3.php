<?php

    $conta = $_POST["conta"] ?? null;
    $res = null;

    if($conta != null){
        if (str_contains($conta, '+')) {
            $temp = explode("+", $conta);
            $res = $temp[0] + $temp[1];
        }
        elseif (str_contains($conta, '-')){
            $temp = explode("-", $conta);
            $res = $temp[0] - $temp[1];
        }
        elseif (str_contains($conta, '*')){
            $temp = explode("*", $conta);
            $res = $temp[0] * $temp[1];

        }
        elseif (str_contains($conta, '/')){
            $temp = explode("/", $conta);
            $res = $temp[0] / $temp[1];
        }

        if ($res != null){
            echo "O resultado é igual a $res";
        }
        else{
            echo "não foi colocado uma conta de acordo com as especificações";
        }
    }

?>