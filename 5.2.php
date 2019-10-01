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
    $numero = 1;
    
    echo"<table>";
    
    while(10 >= $numero){

        echo"<tr>";

        echo"<td>";
        echo "Tabla del ". $numero;
        echo "</td>";

        echo "</tr>";
    
        $numero++;
    }

    echo"</table>";

            ?>    


</body>
</html>