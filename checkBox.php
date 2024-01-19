<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkBox.php" method="post">
        <input type="checkbox" name="pzza" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="pzza" value="Hamburger">
        Hamburger <br>
        <input type="checkbox" name="pzza" value="Hotdog">
        Hotdog <br>
        <input type="checkbox" name="pzza" value="Taco">
        Taco <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        
        if(isset($_POST["Pizza"])){
            echo "you like Pizza!";
        }
        if(isset($_POST["Hamburger"])){
            echo "you like Hamburger!";
        }
        if(isset($_POST["Hotdog"])){
            echo "you like Hotdog!";
        }
        if(isset($_POST["Taco"])){
            echo "you like Taco!";
        }
    }
?>