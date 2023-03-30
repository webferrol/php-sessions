<?php
//Crea un arreglo asociativo donde se guarde la información de un perro donde constará su nombre, su raza, y su edad

$miPerro = [
  "nombre" => "Lily",
  "raza" => "Shi Tzu",
  "edad" => 5
];



//cambia a posteriori el nombre del perro y muéstralo por pantalla 

$miPerro['nombre'] = 'Lasy';

print('Mi perro se llama ' . $miPerro['nombre']);

echo '<br>','Todos los datos:',join(', ',$miPerro);
