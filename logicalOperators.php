<?php
    // example 1
    $age = 33;

    if($age > 0 && $age <= 18){
        echo "you are kid";
    }
    else{
        echo "you are adult now";
    }
    echo "<br>";



    // example 2
    $old = 10;
    $citizen = false;

    if($old >= 18 || $citizen){
        echo "you can vote";
    }
    else{
        echo "your are not a voter";
    }
?>