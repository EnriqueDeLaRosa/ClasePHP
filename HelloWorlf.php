<!DOCTYPE html>
<html>
      <head>
        <meta charset="UTF-8">
        <title>Ejemplo02</title>
    </head>
    <body></body>
<?php
error_reporting(E_ERROR);
 /*$Nombres[0]='Jorge';
$Nombres[1]='Juan';
$Nombres[2]='Javier';
$Nombres[3]='Joaquin';

echo "Bucle clasico";

foreach ($Nombres as $autor){
    echo "este pavo se llama <b>$autor</b>";
}*/


$nota1 =7;
$nota2 =9;
$resultado =suma($nota1, $nota2);

echo 'resultado';

function suma($n1, $n2){
    $res =$n1+$n2;
    return $res;
}
        
?>
    </body>
    </html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

