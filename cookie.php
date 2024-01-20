<?php
    /*
    cookie = information about a user stored in a user's web-browser 
    targeted asvertisements, browsing preferences, and other non-sensitive data
    F12 -. applications to view cookies
    */

    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fev_drink", "water", time() + (86400 * 3), "/");
    setcookie("fev_dessert", "ice_cream", time() + (86400 * 4), "/");

    // foreach($_COOKIE as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_COOKIE["fav_food"])){
        echo "BUY SOME {$_COOKIE["fav_food"]} !!";
    }
    else{
        echo "i don't know your favourite food";
    }

?>