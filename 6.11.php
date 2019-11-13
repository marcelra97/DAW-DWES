
<html>

    <head>



    </head>

    <body>

    <?php

$cadena = "el cuando el coche es de el ";
$cadena1 = "";
$indice = -1;
$indice1 = -1;
$contador = 0;
$arrayIndice = [];
$cambio = false;

    for ($i = 0; $i < strlen($cadena); $i++) {

        $indice = strpos($cadena, "el", $i);



    if ($indice != $indice1) {

        $indice1 = $indice;
        array_push($arrayIndice, $indice);

    }
}


    for ($i = 0; $i < strlen($cadena); $i++) {


        if($arrayIndice[$contador] == $i){

            $cadena1.="the";

            $contador++;

            $cambio=true;

        }else{

            if($cambio == false){
                $cadena1.=substr($cadena,$i,1);
            }

            $cambio = false;
        
    }
}

echo $cadena1;

?>



    </body>



</html>
