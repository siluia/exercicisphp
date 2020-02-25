<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>

<body>

<table>
<?php
 


$condicion=false;

while ($condicion==false){
    $i=mt_rand(0,100);
    echo $i. "<br>";
    if ($i==18){
        $condicion=true;

    }

}   

// el bucle es repetirà fins que el número que es troba en el "if" (en aquest cas un 18) no surti. 
//la condició serà "false" fins que surti el 18 i es converteixi en "true".

?>

</table>
</body>