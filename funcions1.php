<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcions ex.1</title>
</head>
<body>
   <fieldset>
   <form action="funcions1b.php" method="GET">
   <p>Escull dos números:</p>
   <input type="number" name="numero1" step="any" required>
   <input type="number" name="numero2" step="any" required>

   <p>Escull quina operació vols realitzar:</p>
   <input type="radio" name="operacio" value="suma" required>Suma<br>
   <input type="radio" name="operacio" value="resta" required>Resta<br>
   <input type="radio" name="operacio" value="multiplicacio" required>Multiplicació<br>
   <input type="radio" name="operacio" value="divisio" required>Divisió<br>


</select>
</fieldset>
  

<input type="submit" value="Enviar">
<input type="reset" value="Borrar">
</form>
</body>
</html>