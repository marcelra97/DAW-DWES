<html>
  
    <body>
        <?php
          
          $libro1=array(
              "titulo"=>"Don Quijote",
              "autor"=>"Cervantes",
              "fecha"=>1615);
          $libro2=array(
              "titulo"=>"El hobbit",
              "autor"=>"Tolkien",
              "fecha"=>1937);
       
          $biblioteca=array("lib1"=>$libro1,"lib2"=>$libro2);
           
          
          # De la siguiente forma podemos acceder directamente a un elemento:
            foreach($lib1 as $valor){

                foreach($valor as $elemento){
                    
                    echo $elemento. " ";

                }
            }

            

            

           

        ?>
       
    </body>
   
</html>