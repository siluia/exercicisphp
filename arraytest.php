<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Arrays</title>
</head>
<body>
    <?php
        $item[0]=50;
        $item[1]=35;
        $item[2]=47;
        $item[3]=73;
        /*$item[4]=50;
        $item[5]=35;*/
        $item[6]=47;
        $item[7]=73;
        $item[8]=50;
        $item[9]=35;
        $item[10]=47;
        $item[11]=73;
        $item[12]=35;
        $item[13]=47;
        $item[14]=73;


       /* $item=array (50,35,47,73);*/


        for($i=0;$i<14;$i++){
            if (isset($item[$i])){
            echo $item[$i]."<br>";
            }
        }



    ?>

</body>
</html>