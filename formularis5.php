<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja fuerte</title>
</head>
<body>
<?php

$codigo="1234";
$verForm=true;

if (isset($_GET["contador"])){
    $contador=$_GET["contador"];
    $num=$_GET["num"];

    if($num==$codigo){
        echo "La caja fuerte se ha abierto satisfactoriamente";
        
        $contador=0;
        $verForm=false;
    } else if($contador<=4){
        $intentos=4-$contador;
        echo "Ha fallado el codigo. Le quedan $intentos intentos. vuelva a intentarlo";
        $contador=$contador+1;

    } else {
        echo 'Ha agotado los 4 intentos para abrir la caja! Empieza de <a href="formularis5.php"> nuevo </a>';
        $verForm=false;
    }
    
      
}else{
    $contador=0;
}

if($verForm==true){


}

?>
  <form action="formularis5.php" method="get">

    <p>Introduce tu codigo: </p>  
    <p> <input type="number" name="num" autofocus minleght="4" maxlenght="4"> </p>
    <p> <input type="hidden" name="contador" value="<?=$contador?>"></p>      
    <p> <input type="submit" value="Enviar"> </p>
    <p> <input type="reset" value="Borrar"></p>








</form>
</body>
</html>