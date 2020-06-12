<?php

function fabonnaciNumber()
{
    $a = 1;
    $b = 1;
    $sum = 0;
    $c = $a + $b;
    while($c < 4000000){
        if($c % 2 == 0){
            $sum += $c; // $sum = $sum + $c;
            $a = $b + $c;
            $b = $a + $c;
            $c = $a + $b;
        }
    }
    echo $sum;
}

echo fabonnaciNumber();
