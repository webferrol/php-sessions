<?php
# Para depurar y ver el contenido de nuestra variables tenemos la funciones var_dump() y print_r


define('MESES', [
  'Enero',
  'Febrero',
  'Marzo',
  'Abril',
  'Mayo',
  'Junio',
  'Julio',
  'Agosto',
  'Septiembre',
  'Octubre',
  'Noviembre',
  'Diciembre'
]);

// Crea un variable booleana con false y mira el resultado de utilziar ambas funciones para determinar sus diferencias

$boolean = false;


echo "<br>var_dump():<br>";
var_dump($boolean);
var_dump(true);

echo "<pre>",var_dump(MESES),"<pre>";

echo "<br>print_r():<br>";
print_r($boolean);
print_r(true);

echo "<pre>",print_r(MESES),"<pre>";


// Coge el array de meses creado en el ejercicio anterior y mira las diferencias de cómo se muestra con ambas funciones