<?php
    // example 1
    $age = 0;

    if($age > 18){
        echo "your age is {$age} you are adult";
    }
    elseif($age>=0){
        echo "not a valid age";
    }
    else{
        echo "your are not 18!";
    }
    echo "<br>";



    // example 2
    $reg = false;

    if($reg == true){
        echo "you are register student";
    }
    else{
        echo "please regester to enter";
    }
    echo "<br>";
?>