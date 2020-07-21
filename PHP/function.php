<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    function msg() //user define
    {
        echo "Good Morning!<br>";
    }
    msg();

    function born($name,$age) //with argument
    {
            echo "My name is $name $age years old";
            echo "<br>";
    }
    born("Jenny",15);
    born("Jon",11);

    function addNum(float $a, float $b) : int //return type declaration
    {
        return $a + $b;
    }

    echo addNum(2.5, 5.2);

    ?>
</body>
</html>