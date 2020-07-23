<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $result=1;
    
    
     for($n1=0;$n1<5;$n1++)
     { 
        for($n2=0;$n2<=$n1;$n2++)
        {   
            echo $result."&nbsp";
            $result++;
            
        }
        echo "<br>";
     }
    ?>
</body>
</html>