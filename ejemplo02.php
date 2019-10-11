<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo02</title>
    </head>
    <body>
        <?php
            function sinEstáticas(){
                #Ponemos los valores iniciales
                $a = 0;
                $b = 0;
                
                #Mostramos los valores
                
                echo "valor inicial de \$a: ",$a,"<br>";
                echo "Valor incial de \$b: ", $b,"<br>";
                
                /*
                 * Modificamos esos valores sumando 5 al valor de $a
                 * y restando 7 al valor de $b.
                 */
                
                $a += 5;
                $b += 7;
                
                # Visualicemos los nuevos valores de las variables
                echo "Nuevo valor de \$a: ",$a,"<br>";
                echo "Nuevo valor de \$b: ",$b, "<br>";
            }
            
            function conEstaticas(){
                #Definimos $b como estática
                
                $a = 0;
                static $b = 0;
                
                echo "valor inicial de \$a: ", $a,"<br>";
                echo "valor inicial de \$b: ",$b, "<br>";
                
                $a += 5;
                $b -=7;
                
                echo "Nuevo valor de \$a: ", $a, "<br>";
                echo "Nuevo valor de \$b: ", $b, "<br>";
            }
            print ("Esta es la primera llamada a sinEstaticas()<br>");
            
            sinEstáticas();
            
            print ("Esta es la segunda llamada a sinEstaticas()<br>");
            print ("Debe dar el mismo resultado<br>");
            
            #Hacemos lo mismo con la funcion conEstaticas
            
            print ("Esta es la primera llamada a conEstaticas()<br>");
            conEstaticas();
            print ("Esta es la segunda llamada a conEstaticas()<br>");
            print ("El resultado es distinto a la llamada anterios<br>");
            conEstaticas();
            
            //Ejemplo de inserción de mucho texto
            
            $texto=<<<DAM
Esto es un ejemplo <br>
donde insertamos muchas líneas <br>
y esto es una manera sencilla de escribir <br>
DAM;
            echo $texto;
            
            //Mostrar tipos de variable
            
            $a= true;
            echo 'La variable $a es de tipo '. gettype($a);
        ?>
    </body>
</html>
