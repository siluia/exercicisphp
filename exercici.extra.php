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
$hora=mt_rand(0,24);

if ($hora>=6 and $hora<=12){
    $missatge= "Buenos dias!";

    
}elseif($hora>=13 and $hora<=20){
    $missatge= "Buenas tardes!";

}
else{
    $missatge= "Buenas noches!";

}
echo " Son las $hora horas, $missatge"


?>
</body>