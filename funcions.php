<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    function multiplicar($valor){

            return 2* $valor;

    }

    function negreta($text){
        echo "<strong>$text</strong>";

    }
   /* $x=4;
    $z=multiplicar($x);

    $y= multiplicar (9);

    echo negreta ("Els teus resultats: ");
    echo "$z y $y";*/

    function f1($x){
        $h=9;
    }
    
 /*
  
    $x=7;
    f1($x);
    echo $x; */

    function potencia($x, $exponente){
        $valor=1;
        for ($i=1;$i<=$exponente;$i++){
            $valor=$valor*$x;
        }
        return $valor;
    }
       echo potencia(2,6); /*x es 2, exponente es 6*/


    

?>



</body>
</html>