<?php

$cantidad_1=12732.77;
$cantidad_2=1931.81;
//number_format(cantidad,decimales,sep_decimal,sep_millar);
echo number_format($cantidad_1);
echo "<br>";
$cantidad_1=12732.4;
$cantidad_1=number_format($cantidad_1);
echo $cantidad_1;
echo "<br>";
$cantidad_2=number_format($cantidad_2,2,"." , ",");
echo $cantidad_2;