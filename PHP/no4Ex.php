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
$arr="";
$arr1="";
$arr2="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
          $name = test_input($_POST["name"]);
          $arr=$name[0];
          $arr1=$name[1];
          $arr2=$name[2];
         
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
    <?php echo $arr.$arr1.$arr2.$name.$arr.$arr1.$arr2 ;?>
</body>
</html>