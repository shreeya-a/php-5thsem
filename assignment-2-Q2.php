<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.Evaluation Problem Changed</title>
</head>
<body>
    <?php
        function evaluate($name,$attendance,$hygiene,$rating)
        {
            if(($attendance<80) && ($hygiene<50))
            {
                echo $name. ", You are fired from the Rojan Kirana Pasal!";
            }
            elseif (($hygiene<50) && ($rating<2))
            {
                echo $name. ", You are fired from the Rojan Kirana Pasal!";
            }
            else
            {
                echo $name .", Not fired for now";
            }
        }
        //  evaluate("Kushal Karki",100,70,3);
        $n = "Kushal Karki";
        $a = 90;
        $h = 60;
        $r=4;
        $e="evaluate";
        $e($n,$a,$h,$r);



    ?>
</body>
</html>