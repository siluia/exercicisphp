<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultats test infidelitat</title>
</head>
<body>
<?php
    $p1=$_GET ["p1"];
    $p2=$_GET ["p2"];
    $p3=$_GET ["p3"];
    $p4=$_GET ["p4"];
    $p5=$_GET ["p5"];
    $p6=$_GET ["p6"];
    $p7=$_GET ["p7"];
    $p8=$_GET ["p8"];
    $p9=$_GET ["p9"];
    $p10=$_GET ["p10"];

    $final=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10;

    echo "Tu resultado final es de <strong> $final puntos.</strong> ";
    if ($final<=10){
        echo "<h2>¡Enhorabuena! tu pareja parece ser totalmente <strong>fiel</strong>.</h2>";

    }elseif ($final>=11 and $final<=22){
        echo "<h2>Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.
        </h2>";

    }else {
        echo "<h2>Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.
        </h2>";
    }



?>


</body>
</html>