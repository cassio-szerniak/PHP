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
          $msgNaoInformado = "inválido";
          $anoNasc = isset($_GET["ano"]) ? $_GET["ano"] : 2021;
          $idade = date("Y") - $anoNasc;

          if ($idade >= 16 && $idade < 18) {
            $vota = "SIM.";
            $dirige = "NÃO.";
            $votoObrigatorio = "NÃO.";
          } elseif ($idade >= 18 && $idade < 65) {
            $vota = "SIM.";
            $dirige = "SIM.";
            $votoObrigatorio = "SIM.";
          } elseif ($idade > 64) {
                  $vota = "SIM.";
                  $dirige = "SIM.";
                  $votoObrigatorio = "NÃO.";
          } else {
                  $vota = "NÃO.";
                  $dirige = "NÃO.";
                  $votoObrigatorio = "NÃO.";
          }
          

          echo "<p>O ano de nascimento é: $anoNasc e sua idade é: $idade.</p>";
          echo " <p>Habilitado a votar: $vota </p> ";
          echo "<p>Voto Obrigatório: $votoObrigatorio</p>";
          echo "<p>Habilitado a dirigir: $dirige</p>";

        ?>
        <br/>
        <br/>

        <button><a href="condicoes.html">Voltar</a></button>
        
      </div>
    </body>
</html>
 