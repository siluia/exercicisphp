<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tienda2.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<header>
       
    <div class="titol"> 
        <img class="muffin1" src="img/muffin.png" alt="muffin" width="50" height="auto">
        Silvia's Bakery
        <img class="muffin2" src="img/muffin.png" alt="muffin" width="50" height="auto"></div> 
    </header>
<body>


<?php

$taula=$_GET["taula"];

$espera=mt_rand(2,8);



echo "Benvinguts a Silvia's Bakery taula número $taula";

echo "La teva comanda és la següent:";




echo "Temps estimat d'espera $espera minuts";
   

?>

    </p>


</body>
</html>