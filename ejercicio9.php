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
        echo $numero;
        echo "</td>";

        echo"<td>";
        echo ($numero%2 == 0)?"PAR":"IMPAR";
        echo "</td>";

        echo"<td>";
        
        if($numero > 1){

            $x = 2;

                while($numero % $x != 0){

                    $x++;

                }

                if($x == $numero){

                    echo" Es Primo";

                }else{

                    echo" NO es Primo";

                }

        }else{

            echo " No es Primo";
        }
       

        echo "</td>";
   

        echo"</tr>";

        $numero++;
    }

    echo"</table>";

            ?>    


</body>
</html>