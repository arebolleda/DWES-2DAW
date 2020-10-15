<html>
    <head> 
        <meta charset="utf-8"/>

    </head>
    <body>
        <?php  
            // PEDRO FERNÁNDEZ GARCÍA
 /*ALFONSO:<<<< El contenido del array lo tienes que generar de manera dinámica, no de manera estática */
            $impares=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19);   
            echo "<table border='1'>
            <tr>
                <th>Indice</th>
                <th>Binario</th>
                <th>Octal</th>
            </tr>";
            for ($x = 0;$x <= count($impares)-1;$x++){
                echo "<tr>
                    <td>$x</td>
                    <td>".decbin($impares[$x])."</td>
                    <td>".decoct($impares[$x])."
                </tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>
