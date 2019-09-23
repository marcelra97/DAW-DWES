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

        //la j es el dia del mes en el que estamos actualmente.
        //la F es el mes en el que estamos actualmente.
        //la Y es el año en el que nos encontramos actualmente.
        
            $horaActual = date ("j/F/Y");
            
           
            echo "La fecha actual es $horaActual";
           
            ?>    

    
</body>
</html>