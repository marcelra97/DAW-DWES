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

    $arrayNumeros = array("nombre" => "Marcel", "apellido1" => "Ramirez", "apellido2" => "Novillo");

    end($arrayNumeros);

    for ($i = count($arrayNumeros) ; $i >= 0 ; $i--) { 
        
        echo current($arrayNumeros)." ";
        prev($arrayNumeros);

    }
            ?>    


</body>
</html>
