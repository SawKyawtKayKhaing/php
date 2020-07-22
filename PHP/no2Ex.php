<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">  
    Enter a String:<input type="text" name="name"><br>
    Enter a number:<input type="text" name="position"><br>
    <input type="submit" name="submit" value="Submit">
    </form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
     

       $name =$_POST["name"];
       $pos = $_POST["position"];
       echo "Result= ".substr($name,$pos);
 }
       
?>
    
</body>
</html>