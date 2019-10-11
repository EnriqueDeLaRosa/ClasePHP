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
            $dato1 = 20;
            $dato2 = 50;
            if ($dato1 > $dato2){
                echo 'Dato 1 > dato 2';
            }
            else{
                echo 'Dato 2 mayor que dato 1';
            }
        ?>
            
            <h1>Metiendo HTML entre medias</h1>
        <!--
            El siguiente código solo es un ejemplo de como se puede entrar y salir
            del codigo de PHP a voluntad.
        -->
        <?php
            if ($dato1 > $dato2){
        ?>
            
        <h1> Dato 1 mayor que dato 2</h1>
            
        <?php
            
            }else{
        ?>
            <h1> Dato 2 mayor que dato 1</h1>
        <?php
            }
        ?>
    </body>
</html>
