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
       
$nota1 =7;
$nota2 =9;
$resultado =suma($nota1, $nota2);

echo '$resultado';

function suma($n1, $n2){
    $res =$n1+$n2;
    return $res;
}
        ?>
    </body>
</html>
