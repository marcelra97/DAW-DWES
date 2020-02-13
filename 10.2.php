<html>
  
    <body>
        <?php

            $servidor = "localhost";
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";
            
            
            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }

            if (isset($_COOKIE["galleta"])){
               

                $consulta = "SELECT nombre FROM usuarios WHERE id=".$_COOKIE["galleta"].";";
                $resultado = mysqli_query($conn, $consulta);

                $fila = mysqli_fetch_array($resultado);
                $nom = $fila[0];

                echo "<p> Que bueno es verte otra vez por aqui " .$nom. " </p>";

            }else{

                
    
        
        ?>

        <form action="10.2.php" method="post" >
                <p>Introduzca su nombre<input type="text" name="nombre"></p>

                <input type="submit" value="enviar">

        </form>

        <?php

                $nombre = $_POST["nombre"];

                $consulta = "SELECT MAX(id) FROM usuarios;";

                $maximo = mysqli_query($conn, $consulta);

                $fila = mysqli_fetch_array($maximo);
            
                    $nuevaid = $fila["MAX(id)"];   
                    $nuevaid++;
               

                $resultado = "INSERT INTO usuarios VALUES (".$nuevaid.", '".$nombre."');";

                $result = mysqli_query($conn, $resultado);


                $name= "galleta";
                $value= $nuevaid; # Podría ser una cadena de texto
                $expires=time()+60; # 60 segundos después del momento actual
                $path="/";
                $domain="";
                $secure=false;
                $HttpOnly=true;
               
                # Es preciso asegurarse de llamar a setcookie() antes de enviar
                # ninguna otra salida al navegador
                setcookie ($name,$value,$expires,$path,$domain,$secure,$HttpeOnly);

            
        }

            mysqli_close($conn);
        ?>
       
    </body>
   
</html>