<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo("The value of pi = ".pi());
    echo "<br>";
    echo ("The minimun number of 1,2,5,7,9,0 = ".min(1,2,5,7,9,0)."<br>");
    echo ("The maximun number of 10,25,30,55,70 =  " .max(10,25,30,55,70)."<br>");
    echo("The positive value of -1.25 = ".abs(-1.25)."<br>");
    echo("The square root of 49 =".sqrt(49)."<br>");
    echo("Nearest integer of 1.55 = ".round(1.55)."<br>");
    echo("The random number between 1 and 100 is ".rand(1,100));
    ?>

</body>
</html>