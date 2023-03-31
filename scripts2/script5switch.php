<?php 

# Sintax del Switch
// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }

$mes = 'Diciembre';

// Crea un swith en el que en caso de que la variable $mes muestre un mensaje según el caso:

// Caso de "Diciembre" mostrará "Feliz navidad"
// Caso de "Enero" mostrará "Feliz Año Nuevo"
// En otro caso mostrá "En este mes no se celebra nada"


$mensaje = "En este mes no se celebra nada";

switch (strtolower($mes)) {
  case 'diciembre':
    $mensaje = "Feliz Navidad";
    break;
  case 'enero':
    $mensaje = "Feliz Año Nuevo";
    break;
  default:
    break;
}

echo $mes, ": ",$mensaje;
