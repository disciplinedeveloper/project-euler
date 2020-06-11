<?php

/**
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */

function sumOf3And5($count)
{
    $sum = 0;
    for($i=0; $i<$count; $i++)
    {
        if($i % 3 == 0 || $i % 5 == 0){
            $sum += $i;
        }
    }
    echo $sum;
}

echo sumOf3And5(1000);
echo "<br>";

function fabonnaci()
{
    $a = 1;
    $b = 1;
    $sum = 0;
    $c = $a + $b;

    while($c < 4000000){
        if($c % 2 == 0){
            $sum += $c;
            $a = $b+$c;
            $b = $a + $c;
            $c = $a + $b;
        }
    }
    echo $sum;
}

echo fabonnaci();