<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    p {
        float: right;
    }
    p > button > a {
        font-family: 'Courier New', Courier, monospace;
        font-size: 14pt;
    }
</style>
</head>
<body>
<div>
    <?php
        
        /*Y maiúsculo considera todos os dígitos do ano, minúsculo mostra apenas 2 últimos*/
        $nome =  isset($_GET["nome"])?$_GET["nome"]:"não informado";

          $ano = isset($_GET["ano"])?$_GET["ano"]:"2000";

        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"não informado";
        $idade = date("Y") - $ano;
        echo "Seu nome é $nome, você tem $idade anos e seu sexo é $sexo. </br> </br>";
        
        echo date("D d/M/Y");
    ?>
    <p><a href="formulario02.html"><button>Voltar</button></a></p>
</div>
</body>
</html>
 