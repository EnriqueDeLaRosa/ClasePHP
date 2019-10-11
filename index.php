<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Constantes</title>
    </head>
    <body>
        <?php
            error_reporting(E_ERROR);
            //Se define la constante EurPta y le asignamos el valor 166.386
            define("EurPta", 166.386);
            /*Se define la constante PtaEur asignándole el valor 1/166.386
             * En este caso el valor de la constante es el resultado de   
             * la operación aritmética dividir 1 entre 166.386
             */
            define("PtaEur", 1/166.386);
            /*
             * Definimos la constante Cadena y le asignamos el valor 
             * 12Esta constante es una cadena
             */
            define("Cadena", "12Esta constante es una cadena");
            /*
             * Definimos Cadena2 y le asignamos el valor: 12.54Constante con decimal
             */
            define("Cadena2", "12.54Constante con punto decimal");
            
            /*
             * Comprobemos los valores.
             * Observa la nueva forma en la que utilizamos echo
             * Lo hacemos enlazando varias cadenas separadas con punto
             * y/o coma, según se trate de echo o de print
             */
            
            echo "Valor de la constante EurPta:" , EurPta, "<BR>";
            echo "Valor de la constante PtaEur:" , PtaEur, "<BR>";
            print "Valor de la constante Cadena:" . Cadena . "<BR>";
            print "Valor de la constante Cadena x EurPta:" . Cadena*EurPta . "<BR>";
            print "Valor de la constante Cadena2 x EurPta" . Cadena2*EurPta . "<BR>";
            
            echo "Con echo los números no necesitan ir entre comillas: ", 3, "<BR>";
            print "En el caso del print si son necesarias: ". "7". "<BR>";
            print("Incluso entre los parentesis necesitan las comillas: ". "45" . "<BR>");
            print "Solo hay una excepción en el caso del print. ";
            print "Si los números van en un print independiente no necesitan comillas ";
            print 23;
            phpinfo();
        ?>
    </body>
</html>
