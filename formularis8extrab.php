<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercici8</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php


$numero=$_GET["number"];
$color1=$_GET["color"];
$color2=$_GET["color2"];
$fons=$_GET["fons"];
$contador=1;


echo"<style>body{background-color: $fons;}</style>"; 

while ($contador<=$numero)
{
   /* $red=mt_rand(0,255);
    $green=mt_rand(0,255);
    $blue=mt_rand(0,255);*/
    
    $x=mt_rand(0,100);
    $y=mt_rand(0,100);

    echo "<div class='caixa'style='left:$x%; top:$y%;   background-image: radial-gradient($color1,$color2);'</div>";
    


    $contador=$contador+1;

}
/*if ($contador=$numero){
    echo "<a href='https://www.gifsanimados.org/cat-fuego-90.htm'><img src='https://www.gifsanimados.org/data/media/90/fuego-imagen-animada-0432.gif' border='0' alt='fuego-imagen-animada-0432' /></a>";
}*/


/* random color:  echo "<div class='caixa'style='left:$x%; top:$y%; background-color: rgb($red,$green,$blue);'</div>"; */

?>






</body>
</html>