<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultats</title>
</head>
<body>
<fieldset>
<?php
$num1=$_GET["numero1"];
$num2=$_GET["numero2"];
$operacio=$_GET["operacio"];


function suma($x,$y){
    return $x+$y;
}

function resta ($x,$y){
    return $x-$y;
}

function multiplicacio ($x,$y){
    return $x*$y;
}
function divisio ($x,$y){
    return $x/$y;
}

if($operacio=="suma"){ 
    $resultat=suma($num1,$num2);
    
}

if($operacio=="resta"){ 
    $resultat=resta($num1,$num2);
    $invertit=resta($num2,$num1);
    
}

if($operacio=="multiplicacio"){
    $resultat=multiplicacio($num1,$num2);
}
if($operacio=="divisio"){ 
    $resultat=divisio($num1,$num2);
    $invertit=divisio($num2,$num1);
    
}

echo "El teu resultat és <strong> $resultat </strong>";

if($operacio=="resta" or $operacio=="divisio"){
echo "<br> El teu resultat amb factors invertits és <strong> $invertit </strong>";
}




?>
</fieldset>
</body>
</html>