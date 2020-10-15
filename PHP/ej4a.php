<html>
    <head> 
        <meta charset="utf-8"/>

    </head>
    <body>
        <?php  
            // PEDRO FERNÁNDEZ GARCÍA
      /*ALFONSO:<<<< El contenido del array lo tienes que generar de manera dinámica, no de manera estática */
            $impares=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19);   

            $arraybinarios = array_reverse($impares);
            
            for ($r = 0; $r < count($arraybinarios); $r++){
                $arraybinarios[$r] = decbin($arraybinarios[$r]);
            }
            echo "Array invertido y convertido a binario: <br>";
            for ($y = 0; $y < count($arraybinarios); $y++){
                echo $arraybinarios[$y].", ";
            }
        ?>
    </body>
</html>
