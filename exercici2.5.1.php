<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
img {
    height: 50px;
  width: 50px;}

</style>

</head>


<body>
<?php
$nota=mt_rand(0,10);

$nota1=mt_rand(0,10);
$nota2=mt_rand(0,10);
$nota3=mt_rand(0,10);


$notafinal= intval(($nota1+$nota2+$nota3)/3);

switch($notafinal){
    case 1:
    case 2:
    case 3:
    case 4:
        $notatxt= "suspendido";
        $img='<img src="img/fail.jpg">';
        
    break;
    case 5:
        $notatxt= "aprobado";
        $img='<img src="img/bien.jpg">';
       
    break;
    case 6:
        $notatxt= "bien";
        $img='<img src="img/bien.jpg">';
    break;
    case 7:
    case 8:
        $notatxt= "notable";
        
        $img='<img src="img/bien.jpg">';
    break;
    case 9: 
        $notatxt= "excelente";
        
        $img='<img src="img/bien.jpg">';
    break;
    case 10:
        $notatxt= "matricula de honor";
        
        $img='<img src="img/medalla.jpg">';
        
    break;
}

echo "Tus notas son: $nota1 , $nota2, $nota3 por lo tanto tu nota final es $notafinal: un $notatxt";

echo $img
?>
</body>