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


    
 $palabra1 = "marcelitos";
    
    for ($i=strlen($palabra1); $i >= 0 ; $i--) { 
        
    $palabra2 .= $palabra1[$i];

    }

        echo $palabra2;


   

            ?>    


</body>
</html>