<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$name="";
$length="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
          $name = test_input($_POST["name"]);
          $arr=strlen($name);
         $length= $name[$arr-1];
    }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
 ?>
    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">  
    <input type="text" name="name" value="<?php echo $name;?>">
    <input type="submit" name="submit" value="Submit">
    </form>
    <?php echo $length ."\t".$name;?>
    
</body>
</html>