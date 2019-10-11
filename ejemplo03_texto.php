<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo_03_Cadenas</title>
    </head>
    <body>
        <?php
            error_reporting(E_ERROR);
            /*
             * Asignando una cadena
             */
             $str = "Esto es una cadena";
             echo $str;
             /*
              * Añadiendo a la cadena
              */
             $str = $str."con algo más de texto";
             echo $str;
             /*
              * Otra forma de añadir, incluye un carácter de nueva línea protegido
              */
             $str.="Y un carácter de nueva línea al final. <br>";
             echo $str;
             /*
              * Esta cadena terminará siendo '<p>Número: 9</p>'
              */
             $num = 9;
             $str = "<p>Número: $num</p>";
             echo $str;
             /*
              * Esta será '<p>Número: $num</p>'
              */
             $num = 9;
             $str = '<p>Número: $num</p><br>';
             echo $str;
             /*
              * Obtener el primer carácter de una cadena
              */
             $str = 'Esto es una prueba.<br>';
             echo $str;
             $first = $str[0];
             echo $first;
             /*
              * obtener el ultimo caracter de una cadena
              */
             $str = 'Esto es aun una prueba.';
             echo $str;
             $last = $str[strlen($str)-1];
             echo $last;
             
             $ciudad = array("Paris", "Londres", "Madrid", "Roma");
             $numelementos = count($ciudad);
             for ($i=0;$i < $numelementos;$i++){
                 echo "La ciudad $i es ".$ciudad[$i]."<br>";
            }
        ?>
    </body>
</html>
