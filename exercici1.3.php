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
 
    $x=144;
    $y=999;
    $suma=$x+$y;
    $resta=$x-$y;
    $division=$x/$y;
    $multiplicacion=$x*$y;

    echo "<p> El valor de x es $x, el valor de y es $y </p>";
    echo "<p> La suma de $x y $y es $suma </p>";
    echo "<p> La resta de $x y $y es $resta </p>";
    echo "<p> La multiplicación de $x y $y es $multiplicacion</p>";
    echo "<p> La division de $x y $y es $division</p>";

echo "<p><strong>Exemple 2 </strong></p>";

        $aprobados=0;
        $suspendidos=0;
        $nota=8;
        $nota2=4;
        $nota3=5;

    if($nota>5){
        
        echo "<p> El alumno esta aprobado</p>";
        $aprobados=$aprobados+1;

    }elseif ($nota==5){     
        echo"<p> El alumno esta aprobado por los pelos </p>";   
        $aprobados=$aprobados+1;
    
    }else{
        echo"<p> El alumno esta suspendido</p>";
        $aprobados= $aprobados+1;

    }
    
    
    if($nota2>5){
        echo "<p>El alumno 2 esta aprobado</p>";
        $aprobados=$aprobados+1;

        }elseif ($nota2==5){     
        echo"<p> El alumno 2 esta aprobado por los pelos </p>";   
        $aprobados=$aprobados+1;
    
    }else{
        echo"<p> El alumno 2 esta suspendido </p>";
        $suspendidos= $suspendidos=+1;
    }


    if($nota3>5){
        
        echo "<p> El alumno 3 esta aprobado</p>";
        $aprobados=$aprobados+1;

    }elseif ($nota3==5){     
        echo"<p> El alumno esta 3 aprobado por los pelos </p>";   
        $aprobados=$aprobados+1;
    
    }else{
        echo"<p> El alumno 3 esta suspendido</p>";
        $aprobados= $aprobados+1;

    }
    echo "<p>El número de aprobados es $aprobados </p> ";
    echo "<p>El número de suspendidos es  $suspendidos</p>";
   

?>
</body>
</html>