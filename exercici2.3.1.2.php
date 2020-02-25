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
$dia=mt_rand(1,7);


switch($dia){
    case 1:
        $diatxt= "lunes";
        $asignatura="creación paginas web";
    break;
    case 2:
        $diatxt= "martes";
        $asignatura= "programación";
    break;
    case 3: 
        $diatxt="miercoles";
        $asignatura= "PRL";
    break;
    case 4:
        $diatxt="jueves";
        $asignatura= "llenguaje guión web";
    break;
    case 5:
        $diatxt="viernes";
        $asignatura= "publicacióh pagines web";
    break;
    case 6:
        $diatxt="sabado";
        $asignatura= "fiesta!";
    break;
    case 7:
        $diatxt="domingo";
        $asignatura= "fiesta!";
    break;
   
}

echo "Hoy es $dia $diatxt y toca $asignatura"

?>
</body>