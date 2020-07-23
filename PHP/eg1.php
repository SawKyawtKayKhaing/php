<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table border=1 width=300px height=300px>";
       
            for($r=0;$r<8;$r++)
            {
                
                echo "<tr> \n";

                for ($c=1; $c<= 8; $c++) 
                { 
                    $result=$r+$c;
                   
                   if($result%2==0)
                   {
                    echo "<td height=30px width=50px bgcolor=black></td>";
                   }
                   else
                   {
                    echo "<td height=30px width=50px bgcolor=white></td>";
                   }
                    
                }
            echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>