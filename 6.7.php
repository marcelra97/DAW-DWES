<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table{

            border: 1px solid black;

        }

        td{
            border: 1px solid black;
        }

    </style>

</head>
<body>
    
<?php

$texto = "Hola que tal soy marcel";

$abecedario = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");    

$contador = 0;

echo "<table>";
for($i = 0; $i < count($abecedario); $i++){

    for ($j=0; $j < strlen($texto); $j++) { 
        

        if($abecedario[$i] == $texto[$j]){

            $contador ++;

        }
    }    

    echo "<tr>";
       
        echo"<td>";
        echo $abecedario[$i]; 
        echo"</td>";

        echo"<td>";
        echo $contador;
        echo"</td>";

    echo "</tr>";

    
    $contador = 0;

}
echo "</table>";

            ?>    


</body>
</html>
