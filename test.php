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
 

$var=mt_rand(1,5);
echo $var;

if($var==1) {
    echo '<img src="img/vermell.jpg">';
}

elseif ($var==2) 
{
    echo '<img src="img/verde.jpg">';

}

elseif ($var==3){
    echo '<img src="img/rosa.jpg">';

}
elseif ($var==4){
    echo '<img src="img/lila.jpg">';

}

elseif ($var==5){
    echo '<img src="img/naranja.jpg">';

}

else
{
echo '<img src="img/azul.jpg">';

}




?>
</body>
</html>