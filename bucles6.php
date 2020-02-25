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

$num=mt_rand (1,100);
$esPrimo=true; //qualsevol  numero es primo si no es demostra el contrari

    for($i=2;$i<$num and $esPrimo==true;$i=$i+1)  
    {
        if ($num%$i==0)
        {
            $esPrimo=false;
        }
    }
    if ($esPrimo==true)
     {
        echo "$num Es un numero primo";
    }
    else{
        echo "$num No es un numero primo";

    }
  

?>
   
  



</body>
</html>