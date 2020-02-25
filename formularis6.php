<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piramide</title>
</head>
<body>
    <form action="formularis6b.php" method="GET">
<fieldset>
    <p>
    Elige uno de estos caracteres:
    <br>
    <select name="menu">
            <option value="1.png">Mariposa</option>
            <option value="2.png">Rosa</option>
            <option value="3.png">Pollito</option>
            <option value="4.png">Girasol</option>
            <option value="5.png">Arcoiris</option>

    </select>
    </p>



</fieldset>

<fieldset>
    
    <p>Elige el número de filas (más de 5) que quieres que tenga tu piramide:</p>
    
    <input type="number" name="filas" min="5" required>
</fieldset>

<fieldset>
    <input type="submit" value="enviar">
    <input type="reset" value="borrar">
</fieldset>



    </form>
</body>
</html>