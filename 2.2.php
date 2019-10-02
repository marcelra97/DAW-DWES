<html>
    <body>
       
        <h1>
            <?php

            //Al usar las comillas simples no hace nada con la variable, ademas de que te muestra como se llama esa variable
            $horaActual = date ('g:i:s a');
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm
           
            echo 'La hora actual es $horaActual';
           
            ?>   
           
        </h1>
       
    </body>
</html>




