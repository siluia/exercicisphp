<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php
$red=mt_rand(0,255);
$green=mt_rand(0,255);
$blue=mt_rand(0,255);

echo"<style>body{background-color: rgb($red,$green,$blue);}</style>"; 

$re=mt_rand(0,255);
$gree=mt_rand(0,255);
$blu=mt_rand(0,255);

echo"<style> h1 {color:rgb($re,$gree,$blu);}</style>"; 
    ?>
</head>


<body>
<?php
$dia=mt_rand(1,7);


if($dia==1){
echo "<p><h1>Hoy es lunes y toca creación de paginas web</h1></p>";

}elseif ($dia==2){
echo "<p><h1>Hoy es martes y toca programación con lenguaje de guión web</h1></p>";


}elseif ($dia==3){
echo "<p><h1>Hoy es miercoles y toca PRL</h1></p>";


}elseif ($dia==4){
echo "<p><h1>Hoy es jueves y toca programación con lenguaje de guión web</h1></p>";

}elseif ($dia==5){
echo "<p><h1>Hoy es viernes y toca publicación paginas web</h1></p>";

}elseif ($dia==6){
echo "<p><h1>Hoy es sabado y no tenemos clase</h1></p>";

}else{
echo "<p><h1>Hoy es domingo y no tenemos clase</h1></p>";
}
?>
</body>