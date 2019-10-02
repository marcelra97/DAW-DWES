<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
  
    <title>Document</title>
  
</head>
<body>

<?php

$num = 1;
$num2 = 1;


$num++ == ++$num2; 

echo $num. " Es igual que ". $num2 ." cuando hacemos el preincremento <br>";

$num == $num2++;

echo $num. " no es igual que ". $num2 ." cuando hacemos el postincremento <br>";

  ?>    

    
</body>
</html>