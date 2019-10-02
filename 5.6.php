<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    
    th{
        border: solid 1px black;

    }

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
    $colores = "";

    echo"<table>";
    
    for($contador = 0; 10 >= $contador; $contador++ ){

        echo"<tr>";

        while($numero1 <= 10){


            switch ($numero1){

                case 1: $colores ="red";break;

                case 2: $colores ="blue";break;

                case 3: $colores ="cyan";break;

                case 4: $colores ="orange";break;

                case 5: $colores ="brown";break;

                case 6: $colores ="pink";break;

                case 7: $colores ="purple";break;

                case 8: $colores ="green";break;

                case 9: $colores ="yellow";break;

                case 10: $colores ="grey";break;


            }

            if($numero1 <= 9 && $contador == 0){

                echo"<th>";

                echo "Tabla del ". ($numero1 + 1);

                echo "</th>";

            }

            if($contador > 0){

                echo "<td style ='background: $colores'>";

                echo $numero1 * $numero2;
                
                echo "</td>"; 
    
            }

            $numero1 ++;

        }


        $numero1= 1;

        $numero2++;
      
       

        echo "</tr>";
    
        
    }

    echo"</table>";

            ?>    


</body>
</html>