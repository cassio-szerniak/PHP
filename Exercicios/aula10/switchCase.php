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
            //$num recebe o número digitado pelo usuário
            $num = $_GET["num"];
            //$oper recebe o value da operação correspondente
            $oper = $_GET["oper"];

            switch ($oper) {
              case 1:
                $result = $num * 2;
                break;
              case 2:
                //potenciação em php pode ser pow($num,3);
                $result = $num ** 3;
                break;
              case 3:
                //sqrt($num);
                $result = $num**0.5;
                break;
            }
            echo "Resultado: $result";
        ?>
        <a href="switchCase.html"><button style="float: right;">Voltar</button></a>
    </div>
  </body>
</html>
 