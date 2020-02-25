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

if($notafinal<5){
        $notatxt= "Suspendido. Estudia más";
        
}elseif ($notafinal>=5 and $notafinal<6){
        $notatxt= "Aprobado. Estudia más";
               
}elseif($notafinal>=6 and $notafinal>=6){
        $notatxt= "Bien. Estudia más.";

}elseif ($notafinal>=7 and $notafinal>=9){        
        $notatxt= "Notable. Felicidades, sigue así";

}else {
        $notatxt= "Excelente, Muy buen trabajo! Sigue así";
      
}

echo "Tus notas son: $nota1 , $nota2, $nota3 por lo tanto tu nota final es un $notafinal: $notatxt";


?>
</body>