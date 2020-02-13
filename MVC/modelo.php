<?php

    //el modelo es el que llama a otras conexiones
    //require es el import

    $link = mysqli_connect('localhost', 'tomcat', 'tomcat', 'sillas');
    
    if(!$link){
        echo "La conexion a sido fallida -> " . mysqli_connect_error(); 
    } 

    $query = mysqli_query($link, 'SELECT * FROM producto;');

    if(!$query){
        echo 'Error de consulta -> ' . mysqli_error($query);
    }

    $productos = devolverArray($query);

    //cerrar conexion
    mysqli_close($link);

    // Requerir la vista
    require('vista.php');
?>