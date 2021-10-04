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
        $anoNasc = $_GET["ano"];
        $anoAtual = $_GET["anoatual"];
        $idade = $anoAtual - $anoNasc;
        echo "Quem nasceu em $anoNasc tem $idade anos. <br/>";
        /*OPERADORES RELACIONAIS*/
        $tipoVoto = ($idade>=18 && $idade<64)?"OBRIGATÓRIO":" NÃO OBRIGATÓRIO";
        echo "Seu voto é $tipoVoto";
    ?>
</div>
</body>
</html>
 