<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "<table border=1>";
    for ($n1=1; $n1<= 10; $n1++)
    { 
		echo "<tr> \n";
        for ($n2=1; $n2 <= 10; $n2++) 
        { 
		   $result = $n1 * $n2;
           echo "<td>$result</td> \n";
           
		}
	  	    echo "</tr>";
	}
		echo "</table>";
?>
</body>
</html>