<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    $date="9";
    if($date<20)
    {   
        echo $date;

    }
    elseif($date!=8)
    {
        echo "Hello";
    }
    else
    {
        echo "Try again!!";
    }
    $fruit=array("orange","strawberry","grape","kiwi","blueberry");
    echo "<br>".$fruit[3];

    

    ?>
</body>
</html>