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
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "A soma entre $n1 e $n2 é igual a";
            $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
            echo " $r";
        ?>
    </div>
</body>
</html>