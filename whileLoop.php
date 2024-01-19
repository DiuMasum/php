<?php
    // example 1
    $i = 1;
    while($i<=10){
        if($i==5) break;
        echo "$i <br>";
        $i++;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="whileLoop.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php
    // example 2
    $seconds = 0;
    $running = true;

    while($running){
        if(isset($_POST["stop"])){
            $running = false;
        }
        else{
            $seconds++;
            echo $seconds . "<br>";
        }
    }
?>