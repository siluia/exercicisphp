<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table,th,td
        {
            border: 3px solid yellow;
            
        }
    </style>
</head>
<body>
 
<table>
<?php


    $i=1;
    $m=0;
    while ($m<11){
   
        echo "<tr>";
        echo "<td>";
        echo $_GET["menu"]." multiplicat per $m ";
        echo "</td>";
     
     
        echo "<td>";
        echo $_GET["menu"]*$m;
        echo "</td>";
        echo "</tr>";

        $m=$m+1;
    }
    

    

?>   

<p> </p>
</table>
</body>
</html>

