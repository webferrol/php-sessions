<?php
   extract($_GET); // $_GET['comentarios'] --> $comentarios
  //  if (isset($comentarios)) {
  //   echo htmlspecialchars($comentarios);
  //  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inyección por formulario</title>
</head>
<body>
  <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
    <textarea name="comentarios" cols="30" rows="10" placeholder="Sus comentarios aquí"><?=$comentarios??''?></textarea>
    <br>
    <fieldset>
      <legend>Sexo</legend>
      <label>Mujer 
        <input 
          
        <?php 
           if (!isset($sexo) || (isset($sexo) && $sexo==='m')) {
            echo "checked";
           }  
           ?>
           
          type="radio" value="m" name="sexo"></label>
      <label>Hombre 
        
      <input 
      
      <?php 
           if (isset($sexo) && $sexo==='h') {
            echo "checked";
           }  
           ?>
      
      type="radio" value="h" name="sexo"></label>
    </fieldset>

    <?php
    $provincias = [
      "C" => "A Coruña",
      "L" => "Lugo",
      "O" => "Ourense",
      "P" => "PONTEVEDRA"
    ]
    ?>

    <select name="provincia">
      <?php
        foreach($provincias as $key => $value) {
          $selected = (isset($provincia) && $key===$provincia) ? 'selected': '';
          echo "<option $selected value='$key'>$value</option>";
        }
      ?>
    </select>
    <button>Enviar</button>
  </form>
</body>
</html>