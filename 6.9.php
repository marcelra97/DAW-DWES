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

 
$palabra2 = substr($palabra,-4,4);

if(strstr($palabra2,".com")){

    echo "encontrado";

}else{

    echo "no encontrado";
}







            ?>    


</body>
</html>
