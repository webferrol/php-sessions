<?php
//https://www.php.net/manual/es/ref.array.php
$tortilla=array("tiempo"=>"5 minutos","ingredientes"=>array("huevo","patatas","sal"),"receta"=>"Batir un par de huevos, añadir sal a gusto. Pelar unas patatas y dorarlas, mezclar con el huevo y freir");



//añade al array ingredientes de la tortilla la cebolla (array_push)


//utilizar la functión extract() para extraer las variables y utilizarlas en la tabla siguiente



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <link rel="shortcut icon" href="#" type="image/x-icon">
	<title>Tortilla</title>
	<style>
		table, td, th {
			border: 1px solid #000;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>
				Tiempo
			</th>
			<th>
				Ingredientes
			</th>
			<th>
				Receta
			</th>
		</tr>
		<tr>
			<td>Tu código aquí</td>
			<td>Tu código aquí</td>
			<td>Tu código aquí</td>
		</tr>
		<tr>
			<td colspan="3">Número de ingredientes: Tú código aquí</td>
		</tr>
	</table>
</body>
</html>