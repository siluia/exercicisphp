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

    

$inici=mt_rand(0,100);
$i=1;

echo "<p>el número aleatori és el $inici i els seguents 10 numeros son els seguents:</p>";

while ($i<11){

    echo $inici+$i."<br/>"; 
    $i++;
}   




?>

</table>
</body>