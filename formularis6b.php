<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>la teva piramide</title>
</head>
<body>
<?php
$filas=$_GET["filas"];
$contador=1;
$caracter=$_GET["menu"];

while ($contador<$filas){
    
    $contadorcolumnes=0;
    
    while ($contadorcolumnes<$contador){
        echo "<img src=$caracter>";
        $contadorcolumnes=$contadorcolumnes+1;
        
    }
$contador=$contador+1;
echo"<br>";
}


echo '<h3>Volver a <a href="formularis6.php"> intentar</a></h3>';
?>


</body>
</html>