<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php


    
 $año = 2016;

    echo ($año%4 == 0 &&  $año%100 !=0 ) || ($año%400 == 0)?"Es un año bisiesto":"No es un año bisiesto";

            ?>    


</body>
</html>