<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
  <body>
    <div>
        <form method="get" action="media_nota.php">
            Nota 1:
            <input type="text" name="n1">
            Nota 2:
            <input type="text" name="n2">
            <input type="submit" value="Confirma">            

        </form>
        <?php
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = (($nota1+$nota2)/2);

            echo $m;

            if ($m<5) {
              $msg = "REPROVADO";
            } elseif ($m<7 && $m>=5) {
              $msg = "EM RECUPERAÇÃO";
            } else {
              $msg = "APROVADO";
            }

            echo "<p>A media do aluno é: $msg</p>";
            echo "<p>A situação do aluno é: $msg</p>";



        ?>
    </div>
  </body>

</html>
 