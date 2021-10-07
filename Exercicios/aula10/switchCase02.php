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
            
            $d = $_GET["ds"];

            switch ($d) {
              case 1:
              case 2:
              case 3:
              case 4:
              case 5:
                echo "Levanta e vai estudar.";
                break;
              case 6:
              case 7:
                echo "Descanse pequeno gafanhoto.";
                break;
              default:
                echo "Dia da semana inválido.";
              }
        ?>

        <a href="javascript:history.go(-1)"><button style="float: right;">Voltar</button></a>
    </div>
  </body>
</html>
 