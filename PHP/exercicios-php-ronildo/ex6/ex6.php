<?php

    $n = $_POST["n"] ?? null;

    $fib = 0;
    $fib1 = 0;
    $fib2 = 1;

    for($i = 1; $i <= $n; $i++){
        echo "$fib ";
        $fib = $fib1 + $fib2;

        $fib2 = $fib1;
        $fib1 = $fib;
    }

?>