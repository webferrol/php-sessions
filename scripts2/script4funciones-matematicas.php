<?php
 # round() Redondeo de un número

 # rand() Obtención de un número aleatorio
 
 # ceil() Redondeo siempre de un número hacia arriba. Fundamental para realzar paginación

 

//obtener un número aleatorio con rand() entre 1 y 100 y decir si es par o no

$aleatorio = rand(1, 100);

echo $aleatorio % 2 ? "[$aleatorio]Impar" : "[$aleatorio]Par";

$numero = 3.0001;

//a partir de la variable de arriba redondéalo hacia arriba y luego hacia abajo (round y ceil)

$round = round($numero);
$ceil = ceil($numero);

echo "<br>[$numero]: round($round) - ceil($ceil)";