<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
        /*para ser considerado indêntico em PHP (===) é preciso ser igual e do mesmo tipo*/
            $a = 3;
            $b = "3";
            $r = ($a === $b)?"sim":"não";
            echo $r;
        ?>
    </div>
</body>
</html>