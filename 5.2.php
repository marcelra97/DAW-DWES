<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    
    td{
        border: solid 1px black;
        text-align: center;

    }

  

</style>   
<body>
    
<?php

    $contador = 0;
    $numero1 = 0;
    $numero2 = 0; 

    echo"<table>";
    
    while(10 >= $contador){

        echo"<tr>";

        while($numero1 <= 10){

            if($numero1 <= 9 && $contador == 0){

                echo"<th>";

                echo "Tabla del ". ($numero1 + 1);

                echo "</th>";

            }

            if($contador > 0){

                echo "<td>";

                echo $numero1 * $numero2;
                
                echo "</td>"; 
    
            }

            $numero1 ++;

        }

        $contador++;

        $numero1= 1;

        $numero2++;
      
       

        echo "</tr>";
    
        
    }

    echo"</table>";

            ?>    


</body>
</html>