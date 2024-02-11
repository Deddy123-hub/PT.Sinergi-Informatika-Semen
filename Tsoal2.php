<?php

function test1($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "\n";
    }
}
test1(7);


?>