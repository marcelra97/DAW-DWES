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

$palabra = "marcelitos@gmail.com";

 
$posicion = strpos($palabra, "@");

if(strstr($palabra, "@")){

    $cadena1 = substr($palabra,$posicion + 1);

    $cadena2 = substr($palabra,0, $posicion);
    
    echo $cadena1."<br>";
    
    echo $cadena2;
    
}else{

    echo "no tiene el @";
}


            ?>    


</body>
</html>
