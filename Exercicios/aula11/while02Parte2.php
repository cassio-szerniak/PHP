<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <form method="get" action="while02Parte1.php">
            <?php
                $c = 1;
                while ($c <= 5){
                    $num = $_GET["v$c"];
                    echo "Valor $c: $num </br>";
                    $c++;
                }
            ?>
            <button><a href="while02Parte1.php">Voltar</a></button> 
        </form>
    </div>
</body>
</html>