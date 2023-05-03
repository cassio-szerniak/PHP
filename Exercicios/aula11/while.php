<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>
    <?php
    $c = 0;
    $num = $_GET["num"];
    while ($c <= $num) {
      
      echo ("$c ");

      if ( $c==0) {
        echo (" </br>");
      } elseif ($c % 2==0 && $c!=0) {  
        echo (" é par. </br>");
      } else {
        echo (" é ímpar. </br>");
      }
      
      $c++;
    }
    
    ?>
    </br>
    <button>
      <a href="while.html">Voltar</a>
    </button>
  </div>
</body>

</html>
