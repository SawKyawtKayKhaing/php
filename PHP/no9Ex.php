<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">  
    <input type="text" name="num"><br>
    <input type="submit" name="submit" value="Submit">
    </form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
     
    $num=array("");
       $num =$_POST["num"];
       $arrlength=strlen($num);
       $length=str_split($num);
       sort($length);
       $total=0;
    foreach($length as $value)
    {
        $total+=$value;
    }
    $avg=$total/$arrlength;
    echo "The average is ".$avg."<br>";
    $min=$length[0].",".$length[1];
    echo "The minimum numbers are ".$min."<br>";
    $max=$length[$arrlength-2].",".$length[$arrlength-1];
    echo "The maximum numbers are ".$max;
            
       
 }
 ?>
</body>
</html>