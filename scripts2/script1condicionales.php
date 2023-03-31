<?php
# if (condicion){
# 	// Instrucciones
# }
# 
# Operadores de comparacion:
# 
# == Igualdad
# < Menor que
# > Mayor que
# <= Menor o igual que
# >= Mayor o igual que
# != Diferente
# ! Negacion
# 
# */


# Operadores de logicos:

# && - Evalua que se cumpla una de las dos condiciones
# ||, OR - Evalua que se cumpla al menos una condicion


# if else
# $verdadero = true;
# $mes = 'Enero';
# 
# if ($verdadero) {
  # 	echo "Verdadero";
  # } else {
    # 	echo "Falso";
    # }
    # 
# if ($mes == 'Diciembre') {
# 	echo "Feliz Navidad";
# } else if($mes == 'Enero'){
  # 	echo "Feliz Año Nuevo";
# } else if ($mes == 'Julio'){
# 	echo "Feliz Julio";
# } else {
  # 	echo "El mes que pusiste no tiene celebracion";
  # }
  
  
  //Crea la estructura de una web en el que se ha de guardar en una variable llamada edad. 
  // Esta variable se encontrará en control de formulario con el mismo nombre.
  // Si el usuario es mayor de edad se mostrará el mensaje "Bienvenido a esta web", en caso contrario un mensaje conforme a que es menor de edad y no puede visitar el sitio. La edad se ha de cargar mediante un formulario
  // $_REQUEST, $_POST, $_GET para capturar el envío del formulario
  // isset() — Determina si una variable está definida y no es null

  extract($_POST);
  ?>

  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://place-puppy.com/300x300" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Script 1</title>
  </head>
  <body>
   <form>
    <div class="field">
      <form method="POST">
        <label for="edad">
          Edad
          <style>
            tool-tip {
              position: absolute;
              z-index: 1;
              pointer-events: none;
              user-select: none;
              opacity: 0;
              top: 100%;
              left: 5%;

              background-color: white;
              color: black;
            }

            :has(> tool-tip) {
              position: relative;
            }

            :has(> tool-tip):hover {
              opacity: 1;
            }
          </style>
          <tool-tip role="tooltip">
              Mi mensaje va ahí
          </tool-tip>
        </label>
        <input value="<?=$edad??0?>" id="edad" name="edad" type="number" min="0" max="100" required>
        <button>Acceso</button>

        <?php
        if (isset($edad)){

          $edadToInt = intval($edad); 
          // $edadToInt = (int) $edad

          if ($edadToInt > 17) echo "<strong>Bienvenido a esta web<strong>";
          else echo "💥 PROHIBIDO ACCESO";
        }
        ?>
      </form>
    </div>
   </form>
  </body>
  </html>