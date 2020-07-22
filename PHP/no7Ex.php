<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">  
    <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
    </form>
    
<?php
$num=0;
$con="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num= test_input($_POST["name"]);
        for($i=0;$i<strlen($num);$i++){
            if($i%2==1)
            {
                echo $num[$i].",";
            }
            else
            {
                echo $num[$i];
            }
        }
              
          
          
    }
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 ?>
    
</body>
</html>