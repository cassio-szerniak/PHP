<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        
        $valor = $_GET["v"];
        if ($valor==null) /*condição caso o valor seja nulo */
            $valor = 0; 
        
        $raiz = $valor**0.5; /*raiz também tem uma função em php sqrt(valor cujo qual se deseja saber a raiz)*/
       
        echo "A raiz quadrada de  $valor é ". number_format($raiz, 2);
    ?>
    <br>
    <br>
    <a href="formulario.php"><button>Voltar</button></a>

</div>
</body>
</html>
 