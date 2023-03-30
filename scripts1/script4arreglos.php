<?php
//Crea un arreglo que me cargue los meses de un año y los visualicemos a posteriori en una lista ordenada de HTML
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meses año</title>
</head>
<body>

  <?php
  echo '<ol>';
  // foreach(MESES as $mes) {
  //   echo "<li>$mes</li>";
  // }
  for ($i = 0; $i < count(MESES); $i++ ) {
    echo "<li>",MESES[$i],"</li>";
  }
  echo '</ol>';
  ?>
  
    <!-- <?php
    foreach(MESES as $index => $mes):
    ?>
     
        <section>
          <h1><?php echo $index+1;?></h1>
          <p><?=$mes?></p>
        </section>
     
    <?php
    endforeach;
    ?> -->
  
</body>
</html>


