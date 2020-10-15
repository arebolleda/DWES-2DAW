<html>
    <head> 
        <meta charset="utf-8"/>

    </head>
    <body>
        <?php  
            // PEDRO FERNÁNDEZ GARCÍA

            $arrayasociativo = array ("Pedro"=>"9","Carlos"=>"7","Alex"=>"7","Marco"=>"6","Rubén"=>"8");

            // APARTADO A
            /*ALFONSO:<<<< Se muestra la Nota pero no el nombre del alumno*/
            echo "Máximo: ".max($arrayasociativo)."<br>";
              /*ALFONSO:<<<< Se muestra la Nota pero no el nombre del alumno*/
            // APARTADO B
            echo "Minimo: ".min($arrayasociativo)."<br>";
              /*ALFONSO:<<<< OK */
            // APARTADO C
            echo "Media: ".array_sum($arrayasociativo) / count($arrayasociativo)."<br>";
            ?>
    </body>
</html>
