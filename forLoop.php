<?php
    // example 1
    for($i=0; $i<10; $i++){
        echo "hello world <br>";
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
    <form action="forLoop.php" method="$_POST">
        <label>Enter a number to count to:</label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="start">
        </form>
</body>
</html>

<?php
    $counter = $_POST["counter"];
    for($i=$counter; $i>0; $i--){
        echo $i . "<br>";
    }
?>