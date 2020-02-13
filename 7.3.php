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

    $arrayNumeros = array("nombre" => "marcel", "apellido1" => "ramirez", "apellido2" => "novillo");
 
    for ($i=0; $i < count($arrayNumeros); $i++) { 
        
        $elemento = each($arrayNumeros);

         $elemento["value"] = ucfirst($elemento["value"]);
            
         echo $elemento["value"]. " ";
    }

    
            ?>    


</body>
</html>
