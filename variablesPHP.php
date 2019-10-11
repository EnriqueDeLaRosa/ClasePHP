<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            error_reporting(E_ERROR);
            $nota = 10;
            $Nota = 7;
            echo $nota." ".$Nota;
            
            //Punteros
            
            $asignatura = "Bases de datos";
            $ref = &$asignatura;
            echo $asignatura." ".$ref;
            $asignatura = "programación";
            echo "<br>".$asignatura." ".$ref;
            
            //Variables estatic
            
            static $asignatura1 = "Desarrollo";
            $ref = $asignatura1;
            echo $asignatura1." ".$ref;
            $asignatura1 = "PSP";
            echo "<br>".$asignatura1." ".$ref;
            
        ?>
    </body>
</html>
