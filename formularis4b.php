<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultat</title>
</head>
<body>
    <fieldset>

<?php
    
    
    $base=$_GET["base"];
  
    $irpf=$base*0.15;
    $iva=$base*0.21;
 

    $total=$base-$irpf+$iva;
   
   
    echo "El total de la factura es $total. El IRPF es $irpf y el IVA es $iva";
    
    
    

?>
    </fieldset>
</body>
</html>