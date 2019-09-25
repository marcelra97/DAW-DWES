<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
  
    <title>Document</title>
  
</head>
<body>

<?php

$horario = date("H");



if($horario > "06" && $horario<= "12" ){

    echo "Buenos Dias!!!";
}
elseif($horario > "12" && $horario<= "18") {
     
    echo "Buenas Tardes!!!";
}
elseif($horario > "18"){
    
    echo "Buenas noche!!!!";
}

  ?>    

    
</body>
</html>