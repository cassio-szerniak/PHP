<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <form method="get" action="while02Parte2.php">
            <?php
                $c = 1;
                while  ($c <= 5) {
                
                echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'></br>";
                $c++;
            }
            ?>
            <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>

</html>