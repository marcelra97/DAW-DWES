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

$palabra = "marcelitos";


for ($i=strlen($palabra); $i >= 0; $i-=2) { 

    $palabra2 .= substr($palabra,$i,2);


}

echo $palabra2;




            ?>    


</body>
</html>
