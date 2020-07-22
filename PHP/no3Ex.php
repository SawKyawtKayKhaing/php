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


if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
          $name = test_input($_POST["name"]);
          $arr=$name[0];
          $new=strlen($name);
         $length= $name[$new-1];
         $name[0]=$length;
         $name[$new-1]=$arr;
    }
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 ?>
    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">  
    <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
    </form>
    <?php echo $name ;?>
</body>
</html>