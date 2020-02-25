<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function descuento($x){

    $deupercent=$x*0.10;
    $quinzepercent=$x*0.15;
    
    
    if($x<=100){
    $resultat=$x;
    }
    
    
    if($x>=100 and $x<=499){
        $resultat=$x-$deupercent;
    }
    
    
    if ($x>=500){
        $resultat=$x-$quinzepercent;
    } 
  return $resultat;  
} 


$total=$_GET["preu"];
$total2=$_GET["preu2"];





$resultat=descuento($total);
echo "El producte 1 previ als descomptes valia $total, amb els descomptes val: $resultat euros.<br>"; 


$resultat2=descuento($total2);

echo "El producte 2 previ als descomptes valia $total2, amb els decomptes val: $resultat2 euros.<br>"; 

$final= $resultat+$resultat2;

echo "El preu total de la teva compra és $final euros.<br>";

?>
</body>
</html>