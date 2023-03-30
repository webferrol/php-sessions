<?php
//crea un arreglo multidemensional que guarde la información de un listado de amigos y sus teléfonos

const LISTADO = [
  [
    'nombre' => 'David',
    'telefono' => '333'
  ],
  [
    'nombre' => 'Pepa',
    'telefono' => '111'
  ]
];



//muestra con count() el número de amigos que tiene tu listado

echo "Sólo tengo ",count(LISTADO)," amigos y mi mejor amigo es ",LISTADO[0]['nombre'];
