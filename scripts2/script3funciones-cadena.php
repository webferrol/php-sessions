<?php 

# trim()  limpiamos los espacios en blanco por la izquierda y la derecha
# strlen() longitud de un string
# substr() extraemos texto
# strtoupper() pasamos a mayúsculas
# strtolower() pasamos a minúsculas
# strpos() posición / índice de una parte de la cadena

$nombreProfe = "                Xurxo            ";
//con las funciones trim() y strlen() indícame el número de caracteres que tiene tu profesor

$nombreProfe = trim($nombreProfe);

echo $nombreProfe, ' tiene ',strlen($nombreProfe),' caracteres';

$nombreCompleto	=" Alejandro González Tenreiro";


//crea dos variables y extrae los valores del nombre por un lado y los apellidos por otro:
//funciones útiles: strlen, strpos, substr, trim

$nombreCompleto = trim($nombreCompleto); // limpiamos espacios en blanco izq/der
$blancoIndice = strpos($nombreCompleto, " "); // índice del primer espacio en blanco
$nombrePila = substr($nombreCompleto, 0, $blancoIndice);
// $apellidos = substr($nombreCompleto, $blancoIndice + 1, strlen($nombreCompleto) - strlen($nombrePila  ));

$apellidos = substr($nombreCompleto, $blancoIndice + 1);


echo "<br>Hola mi nombre de pila es $nombrePila y mis apellidos son $apellidos";

$arrayNombre = explode(" ",$nombreCompleto);

echo '<pre>';
echo var_dump($arrayNombre);
echo '</pre>';
