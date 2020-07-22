<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     for($n=1;$n<100;$n++){
         if($n%3==0){
         continue;
        
         }
         echo $n."<br>";
     }
    ?>
</body>
</html>