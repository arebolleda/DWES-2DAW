<html>
    <head> 
        <meta charset="utf-8"/>

    </head>
    <body>
        <?php  
            // PEDRO FERNÁNDEZ GARCÍA

            $array1 = array("Bases Datos","Entornos Desarrollo","Programación");
            $array2 = array("Sistemas Informáticos","FOL","Mecanizado");
            $array3 = array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces", "Inglés");

             /*ALFONSO:<<<< Se deben utilizar bucles para hacer la unión dinámica -> si los arrays tuvieran miles de elementos como lo harías?? */
            // APARTADO A
            $array4 = array($array1[0],$array1[1],$array1[2],$array2[0],$array2[1],$array2[2],$array3[0],$array3[1],$array3[2],$array3[3],$array3[4]);

            for ($x = 0; $x < count($array4); $x++){
                echo $array4[$x]."<br>";
            }
            echo "<br><br>";

             /*ALFONSO:<<<< Muy bien resuelto*/
            // APARTADO B
            $mergedarray = array_merge($array1,$array2,$array3);

            for ($x = 0; $x < count($mergedarray); $x++){
                echo $mergedarray[$x]."<br>";
            }
            echo "<br><br>";


            // APARTADO C
            /*ALFONSO:<<<< Se deben utilizar bucles para hacer el apartado*/
            $pushedarray = array();
            array_push($pushedarray,$array1[0],$array1[1],$array1[2],$array2[0],$array2[1],$array2[2],$array3[0],$array3[1],$array3[2],$array3[3],$array3[4]);

            for ($x = 0; $x < count($pushedarray); $x++){
                echo $pushedarray[$x]."<br>";
            }
        ?>
    </body>
</html>
