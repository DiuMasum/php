<?php
    /*
        hashing = transforming sensitive data (password) into letters, numbers, and/or symbols
        via a mathematical process. (similar to enctyption Hides the original data from 3rd parties.)
    */

    $password = "masum123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("masum123", $hash)){
        echo "your are logged in";
    }
    else{
        echo "incorrect password";
    }
?>