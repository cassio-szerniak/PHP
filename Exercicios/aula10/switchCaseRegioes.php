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
            
            $regiao = $_GET["est"];

            switch ($regiao) {
              case 1:
              case 2:
              case 3:
              case 4:
              case 5:
              case 6:
              case 7:
                echo "Região Norte";
                break;
              case 8:
              case 9:
              case 10:
              case 11:
              case 12:
              case 13:
              case 14:
              case 15:
              case 16:
                echo "Região Nordeste";
                break;
              case 17:
              case 18:
              case 19:
                echo "Região Centro-Oeste";
                break;
              case 20:
              case 21:
              case 22:
              case 23:
                echo "Região Sudeste";
                break;
              case 24:
              case 25:
              case 26:
                echo "Região Sul";
                break;
              default:
                echo "Inválido.";
              }
        ?>

        <a href="javascript:history.go(-1)"><button style="float: right;">Voltar</button></a>
    </div>
  </body>
</html>
 