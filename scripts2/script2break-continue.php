<?php
# break nos permite salir de un ciclo o blucle
# continue nos permite saltar un iteración de un bucle

$paises = array(
	'Mexico', 'España', 'Colombia', 'Peru', 
	'Argentina', 'Venezuela', 'Guatemala'
);

// Listar todos los países menos España
// Realizar un ciclo for
// Preguntar si nos encontramos con el valor "España" y en caso positivo escribir la instrucción "continue"

for ($i = 0; $i < count($paises); $i+=1) {
	if ($paises[$i] === "España") continue;
	echo $paises[$i],'<br>';
}


