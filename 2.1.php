<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
  
    <title>Document</title>
    <style>
    
    body{
    background: red;
    
    }
    </style>

</head>
<body>

<?php

            $horaActual = date ("g:i:s a");
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm
           
            echo "La hora actual es $horaActual";
           
            ?>    

    
</body>
</html>