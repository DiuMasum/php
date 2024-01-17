<?php
    // arithmetic operators
    // + - * /

    $a = 10;
    $b = 3;
    $c = null;

    //$z = $a+$b;
    //$z = $a-$b;
    //$z = $a*$b;
    //$z = $a/$b;
    //$z = $a**$b;
    $z = $a%$b;

    echo $z;



    // increment / decrement operators
    // ++ --

    $counter = 0;

    $counter=+3;
    echo $counter;



    // Operator precedence
    // ()
    // ** 
    // * / %
    // + -

    $total = 1+2-3*4/5**6;

    echo $total;
?>