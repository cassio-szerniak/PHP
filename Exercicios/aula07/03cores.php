<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>

    <?php
        $texto = $_GET["t"];
        $tam = $_GET["tam"];
        $cor = $_GET["cor"];
    ?>
    <style>
        span.texto {
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;  
        }
    </style>
</head>
<body>
    <div>
        <?php
        echo "<span class='texto'>$texto</span>";
        ?>
        <p><a href="03exercicio.html"><button>Voltar</button></a></p>
    </div>
    
</body>
</html>