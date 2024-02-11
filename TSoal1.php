<?php

$n = intval(readline("Masukkan jumlah baris: "));

    for ($i=1; $i<=$n; $i++){
        for ($j=1; $j <= $i;$j++){
            echo "*";
        }
        echo "\n";
    }


?>