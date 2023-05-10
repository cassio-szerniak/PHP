<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <form method="get" action="contador.html">
            <?php

            $cini = $_GET["ini"];
            $cfin = $_GET["fin"];
            $inc = $_GET["inc"];

            if ($cini > $cfin) {
                $inc = $inc * -1;
            }
            echo "$cini ";
            $res = $cini + $inc;
            while ($res != $cfin) {
                echo "$res ";
                $res = $cini + $inc;
            }

            ?>
            </br>

            <button><a href="contador.html">Voltar</a></button>
        </form>
    </div>
</body>

</html>