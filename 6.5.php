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


    
    $palabra1 = "Hola que tal soy marcel";

    for ($i = 0; $i < strlen($palabra1); $i++) { 
       
        if($palabra1[$i] == "a"){

            $palabra1[$i] = "e";

        }elseif($palabra1[$i] == "e"){

            $palabra1[$i] = "i";

        }elseif($palabra1[$i] == "i"){

            $palabra1[$i] = "o";

        }elseif($palabra1[$i] == "o"){

            $palabra1[$i] = "u";
            
        }elseif($palabra1[$i] == "u"){

            $palabra1[$i] = "a";
        }

    }
    echo $palabra1."<br>";
   
    for ($i = 0; $i < strlen($palabra1); $i++) { 
       
        if($palabra1[$i] == "e"){

            $palabra1[$i] = "a";

        }elseif($palabra1[$i] == "i"){

            $palabra1[$i] = "e";

        }elseif($palabra1[$i] == "o"){

            $palabra1[$i] = "i";

        }elseif($palabra1[$i] == "u"){

            $palabra1[$i] = "o";
            
        }elseif($palabra1[$i] == "a"){

            $palabra1[$i] = "u";
        }

    }

    echo $palabra1;

            ?>    


</body>
</html>
