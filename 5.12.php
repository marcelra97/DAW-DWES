<html>
    <head>
        <title>
            Simulador de paloma mensajera
        </title>
        <link rel="stylesheet" type="text/css" href="common.css" />
        <style type="text/css">
            div.map {
                float:left;
                text-align: center;
                border: 1px solid #666;
                background-color: #fcfcfc;
                margin: 5px;
                padding: 1em;
            }
            span.casa, span.paloma {
                font-weight: bold;
                color: red;
            }
            span.aire {
                color: blue;
            }
               
        </style>
    </head>
    <body>
       
        <h1>
            <?php
            $rebotes = 0;
            $tamañoMapa=10;
            $derecha = true;
            $abajo = true;
            $izquierda = false;
            $arriba = false;

            $derecha3 = true;
            $abajo3 = true;
            $izquierda3 = false;
            $arriba3 = false;

            $derecha2 = true;
            $abajo2 = true;
            $izquierda2 = false;
            $arriba2 = false;

            $barraX= 0;
            $barraY= 8; 
            $derechaBarra=true;
            $izquierdaBarra=true;

            $barra2X= 1;
            $barra2Y= 8; 
            $derechaBarra2=true;
            $izquierdaBarra2=true;

            $barra3X= 2;
            $barra3Y= 8; 
            $derechaBarra3=true;
            $izquierdaBarra3=true;

            # Posicionar la paloma
           
           
                $pelotaX = rand (0,$tamañoMapa-1);
                $pelotaY = rand (0,$tamañoMapa-1);

                $pelota2X = rand (0,$tamañoMapa-1);
                $pelota2Y = rand (0,$tamañoMapa-1);

                $pelota3X = rand (0,$tamañoMapa-1);
                $pelota3Y = rand (0,$tamañoMapa-1);
           
                if($pelotaX < 9){

                    $derecha = true;
                    $izquierda = false;
    
                }else{
    
                    $derecha = false;
                    $izquierda = true;
    
                }
    
                if($pelotaY < 9){
    
                    $abajo = true;
                    $arriba = false;
    
                }else{
    
                    $arriba = true;
                    $abajo = false;
                }
    
                if($pelota2X < 9){

                    $derecha2 = true;
                    $izquierda2 = false;
    
                }else{
    
                    $derecha2 = false;
                    $izquierda2 = true;
    
                }
    
                if($pelota2Y < 9){
    
                    $abajo2 = true;
                    $arriba2 = false;
    
                }else{
    
                    $arriba2 = true;
                    $abajo2 = false;
                }

                if($pelota3X < 9){

                    $derecha3 = true;
                    $izquierda3 = false;
    
                }else{
    
                    $derecha3 = false;
                    $izquierda3 = true;
    
                }
    
                if($pelota3Y < 9){
    
                    $abajo3 = true;
                    $arriba3 = false;
    
                }else{
    
                    $arriba3 = true;
                    $abajo3 = false;
                }


            do{

            #El limite de la pelota
            if($pelotaX == 0){

                $derecha = true;
                $izquierda = false;
                $rebotes++;

            }elseif($pelotaX == 9){

                $izquierda = true;
                $derecha = false;
                $rebotes++;

            }

            if($pelotaY == 0){

                $arriba = false;
                $abajo = true;
                $rebotes++;

            }elseif($pelotaY == 9){

                $arriba = true;
                $abajo = false;
                $rebotes++;
            }

            if($pelota2X == 0){

                $derecha2 = true;
                $izquierda2 = false;
                $rebotes++;

            }elseif($pelota2X == 9){

                $izquierda2 = true;
                $derecha2 = false;
                $rebotes++;

            }

            if($pelota2Y == 0){

                $arriba2 = false;
                $abajo2 = true;
                $rebotes++;

            }elseif($pelota2Y == 9){

                $arriba2 = true;
                $abajo2 = false;
                $rebotes++;
            }

            if($pelota3X == 0){

                $derecha3 = true;
                $izquierda3 = false;
                $rebotes++;

            }elseif($pelota3X == 9){

                $izquierda3 = true;
                $derecha3 = false;
                $rebotes++;

            }

            if($pelota3Y == 0){

                $arriba3 = false;
                $abajo3 = true;
                $rebotes++;

            }elseif($pelota3Y == 9){

                $arriba3 = true;
                $abajo3 = false;
                $rebotes++;
            }

            //limites de los palos

            if($barraX == 0){

                $izquierdaBarra = false;
                $derechaBarra = true;

            }elseif($barraX == 7){

                $izquierdaBarra = true;
                $derechaBarra = false;

            }
            if($barra2X == 1){

                $izquierdaBarra2 = false;
                $derechaBarra2 = true;

            }elseif($barra2X == 8){

                $izquierdaBarra2 = true;
                $derechaBarra2 = false;

            }
            if($barra3X == 2){

                $izquierdaBarra3 = false;
                $derechaBarra3 = true;

            }elseif($barra3X == 9){

                $izquierdaBarra3 = true;
                $derechaBarra3 = false;

            }



              //mover pelota
              if($derecha && $pelotaX < 9){

                $pelotaX++;

              }elseif($izquierda && $pelotaX > 0){

                $pelotaX--;

              }
              if($arriba && $pelotaY > 0){

                $pelotaY --;

              }elseif($abajo && $pelotaY < 9){

                $pelotaY++;
              }

              if($derecha2 && $pelota2X < 9){

                $pelota2X++;

              }elseif($izquierda2 && $pelota2X > 0){

                $pelota2X--;

              }
              if($arriba2 && $pelota2Y > 0){

                $pelota2Y --;

              }elseif($abajo2 && $pelota2Y < 9){

                $pelota2Y++;
              }

              if($derecha3 && $pelota3X < 9){

                $pelota3X++;

              }elseif($izquierda3 && $pelota3X > 0){

                $pelota3X--;

              }
              if($arriba3 && $pelota3Y > 0){

                $pelota3Y --;

              }elseif($abajo3 && $pelota3Y < 9){

                $pelota3Y++;
              }
              

              //movimiento de la barra
              if($derechaBarra && $barraX < 7){

                $barraX ++;

              }elseif($izquierdaBarra && $barraX > 0){

                $barraX --;
              }

              if($derechaBarra2 && $barra2X < 8){

                $barra2X ++;

              }elseif($izquierdaBarra2 && $barra2X > 1){

                $barra2X --;
              }

              if($derechaBarra3 && $barra3X < 9){

                $barra3X ++;

              }elseif($izquierdaBarra3 && $barra3X > 2){

                $barra3X --;
              }
              

              //rebote pelota en las barras
              if($pelotaY == 8){

              if($barraX == $pelotaX || $barra2X == $pelotaX || $barra3X == $pelotaX){

                
                $arriba= true;
                $abajo= false;
              }
            }

            if($pelota2Y == 8){

                if($barraX == $pelota2X || $barra2X == $pelota2X || $barra3X == $pelota2X){
  
                  
                  $arriba2= true;
                  $abajo2= false;
                }
              }

              if($pelota3Y == 8){

                if($barraX == $pelota3X || $barra2X == $pelota3X || $barra3X == $pelotaX){
  
                  
                  $arriba3= true;
                  $abajo3= false;
                }
              }
  
                    ///  
                   
                #Mostrar el mapa actual
                echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
               
                for ($y=0; $y<$tamañoMapa; $y++)
                {
                    for ($x=0; $x<$tamañoMapa; $x++)
                    {
                        
                        if ($x == $pelotaX && $y == $pelotaY)
                        {
                            echo '<span class="paloma">O</span>'; #Pelota

                        }elseif($x == $pelota2X && $y == $pelota2Y){
                            
                            echo '<span class="paloma">0</span>';

                        }elseif($x == $pelota3X && $y == $pelota3Y){
                            
                            echo '<span class="paloma">D</span>';

                            
                        }elseif($x == $barraX && $y == $barraY){

                            echo '<span class="paloma">_</span>';

                        }elseif($x == $barra2X && $y == $barra2Y){

                            echo '<span class="paloma">_</span>';

                        }elseif($x == $barra3X && $y == $barra3Y){

                            echo '<span class="paloma">_</span>';
                        }
                        else{
                            echo '<span class="aire">.</span>'; #Aire
                        }
                       
                        echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }
                   
                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                }
               
                echo "</pre>palomax=$pelotaX palomaY=$pelotaY rebotes=$rebotes</div>\n";
                

            } while ($rebotes < 18);
          
            ?>   
           
        </h1>
       
    </body>

</html>