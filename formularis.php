<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularis</title>
        
</head>
<body>
<?php   


if (isset($_GET ["usuario"]) and isset ($_GET["password"])){
  if ($_GET["password"]=="123456"){
  
  echo "<p>Bienvenido <strong>". $_GET["usuario"]. "</strong></p>";
  } else {
    echo '<p>Contraseña incorrecta. <a href="formularis.php"> sigue intentandolo </a></p>';

  }
} else {
 



?>
<fieldset>
<form action="formularis.php" method="get">
<p>Usuario: <input type="text" name="usuario"  minlength="6" ></p> 
<p>Contraseña: <input type="password" name="password" minlength="6"></p>
<p>Correo: <input type="email" name="correo" size="40"></p>
<p>Teléfono: <input type="tel" name="telefono"></p>
<p><input type="color" name="colorElegido"></p>
Indique su nivel:
<p><input type="range" name="rango"></p>
<p><input type="file" name="archivo" value="image/*"></p>
Dale a la caca
<p><input type="image" name="caca" src="caca.png" alt="caca"width="50" height="50" style="vertical-align: middle"></p>
</fieldset>
<fieldset>
<p>Deja aquí tu mensaje:</p>
<textarea name="texto"  cols="30" rows="10"placeholder= "Escribe aquí tu mensaje"></textarea>
<p>¿Qué eres?
<select name="Menú">
  <option>Hombre</option>
  <option>Mujer</option>
  <option selected>Animal</option>
</select></p>
</fieldset>

<fieldset>

<p><button type="submit" value="Enviar">
  <img src="send.png" alt="enviar" width="20" height="20" style="vertical-align: middle">
  Enviar
  </button>

    <button type="reset" value="Borrar">
  <img src="basura.png" alt="delete" width="20" height="20" style="vertical-align: middle">
  Borrar
  </button>
    <button type="button">
  <img src="caca.png" alt="caca" width="20" height="20" style="vertical-align: middle">
  Este botón no hace nada
  </button>

    
  </p>

</form>
</fieldset>
<?php 
}
?>

</body>
</html>