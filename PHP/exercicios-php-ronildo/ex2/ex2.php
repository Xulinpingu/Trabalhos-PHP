<?php

    $text = $_POST["text"] ?? null;

    if($text != null){
        if (str_contains($text, 'F')) {
            $temp = explode("F", $text);
            $cel = 5/9 * ($temp[0] - 32);
            echo "$cel °C";
        }
        elseif (str_contains($text, 'C')){
            $temp = explode("C", $text);
            $fah = ($temp[0] * 1.8) + 32;
            echo "$fah °F";
        }
        else{
            echo "especifique o tipo de temperatura";
        }
    }
    

?>