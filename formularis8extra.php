<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Coming+Soon&display=swap" rel="stylesheet">
</head>

<body>

    <form action="formularis8extrab.php" method="get">


<fieldset>
    <p><h1>Introduce un número: </h1> </p>
    <p><input type="number" name="number" step="any">  </p>
    <p><h1>Elige un color: </h1> </p>
    <p><input type="color" name="color" value="#ff0000"></p>
    <p><input type="color" name="color2" value="#ff0000"></p>

    <p><h1>Elige un color de fondo: </h1> </p>
    <p><input type="color" name="fons" value="#ff0000"></p>


    <p>
    <input type="submit" value="Enviar"
    style="BORDER: rgb(0,0,0, 0)  1px dashed; 
            color:rgb(250,250,250, 0.5);
            FONT-SIZE: 20pt; font-family: 'Coming Soon', cursive;
         BACKGROUND-COLOR: rgb(0,0,0, 0)">
    <input type="reset" value="Borrar"
    style="BORDER: rgb(0,0,0, 0) 1px dashed; 
            color:rgb(250,250,250, 0.5);
            FONT-SIZE: 20pt; font-family: 'Coming Soon', cursive;
         BACKGROUND-COLOR: rgb(0,0,0, 0)">
  </p>
 
</fieldset>  


  </form>
</body>
</html>