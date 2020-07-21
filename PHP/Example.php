<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x=25;
echo "Hello Everyone";
echo "<br>";
echo "Count words in a string is " .str_word_count("Hello Everyone!");
echo "<br>";
echo "Hello World<br>";
echo "The length of string is ".strlen("Hello World!");
echo "<br>";
$oldtxt="HelloWorld";
echo "Replace text is ". str_replace("World","Teacher",$oldtxt);
echo "<br>";
echo $x;
echo "<br>";
var_dump(is_int($x));
?> 

</body>
</html>