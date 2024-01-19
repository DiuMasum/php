<?php

    // example 1
    function happy_birthday($name, $age){
        echo "Happy Birthday dear {$name}<br>";
        echo "Happy Birthday too you <br>";
        echo "Happy Birthday dear <br>";
        echo "your are {$age} years old <br> <br>";
    }

    happy_birthday("suhashini", 23);
    happy_birthday("kuddus", 33);
    happy_birthday("kashem", 5);



    // example 2

    function kuchvi(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);

        return $c;
    }

    echo kuchvi(5, 3);
?>