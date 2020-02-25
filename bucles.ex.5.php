<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bucles ex5</title>

    <style>
        table,th,td
        {
            border: 1px solid orange;
            
        }
    </style>

<?php

    
$i=mt_rand(0,10);
$m=0;
?>
</head>

<body>
    
    <table>
<thead>
<tr>
<th>
    Taula del <?= $i ?>
</th>
 </tr>


</thead>    


    <?php

  
        while ($m<11)
        {
       
            echo "<tr>";
            echo "<td>";
            echo " $i multiplicat per $m ";
            echo "</td>";
         
         
            echo "<td>";
            echo $i*$m;
            echo "</td>";
            echo "</tr>";

            $m=$m+1;

        }

        
    

    ?>
    

    </table>



</body>
</html>