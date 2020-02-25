<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>


<body>
<?php
$nota=mt_rand(0,10);

switch($nota){
    case 1:
    case 2:
    case 3:
    case 4:
        $notatxt= "suspendido";
    break;
    case 5:
        $notatxt= "aprobado";
    break;
    case 6:
        $notatxt= "bien";
    break;
    case 7:
    case 8:
        $notatxt= "notable";
    break;
    case 9: 
        $notatxt= "excelente";
    break;
    case 10:
        $notatxt= "matricula de honor";
    break;
}

echo "Tus notas son: $nota y por lo tanto tu nota final es: $notatxt"

?>
</body>