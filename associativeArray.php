<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associativeArray.php" method="post">
        <label>Enter a country</label><br>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    // example 1
    $capitals = array("USA"=>"washington D.C",
                      "Canada"=>"toronto",
                      "Germany"=>"berlin");

    //$capitals["USA"] = "las vegas";
    //$capitals["China"] = "Beijing";
    //array_pop($capitals);
    //array_shift($capitals);
    //$keys = array_keys($capitals);
    //$values = array_values($capitals);
    //$capitals = array_flip($capitals);
    //$capitals = array_reverse($capitals);
    //echo count($capitals);

    foreach($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    }


    //example 2
    $capital = $capitals[$_POST["country"]];

    echo "The capital is {$capital}";
?>