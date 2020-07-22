<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
    $name = $email = $phone = $town = $grade = $subject="";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
          $name =$_POST["name"];
          $email = $_POST["email"];
          $phone = $_POST["phone"];
          $town = $_POST["town"];
          $grade = $_POST["grade"];
    }
?>
      
    <h2>Student Registration Form</h2>
    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">  
    Name:<input type="text" name="name" value="<?php echo $name;?>"><br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>"><br><br>
    Phone: <input type="text" name="phone" value="<?php echo $phone;?>"><br><br>
    Township:
    <select name="town"> 
    <option  value="Monywa">Monywa</option>
    <option  value="Yangon">Yangon</option>
    <option  value="Mandalay">Mandalay</option>
    </select><br><br>
    Grade:
    <input type="radio" name="grade"  value="First Year">First Year
    <input type="radio" name="grade"  value="Second Year">Second Year
    <input type="radio" name="grade"  value="Third Year">Third Year
    <input type="radio" name="grade"  value="Final Year">Final Year<br><br>
    Subject:
    <input type="checkbox" name='subject[]' value="C++">C++
    <input type="checkbox" name='subject[]' value="Java">Java
    <input type="checkbox" name='subject[]' value="C#">C#
    <input type="checkbox" name='subject[]' value="PHP">PHP<br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

<?php

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $town;
echo "<br>";
echo $grade;
echo "<br>";

if (!empty($_POST['subject']))
        {
          foreach($_POST['subject'] as $value)
          {
            echo $value."<br>";
          }
        
        }
?>
</body>
</html>