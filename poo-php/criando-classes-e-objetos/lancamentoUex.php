<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>

  <style>
    p.date {
      position: relative;
      text-align: right;

    }
  </style>
</head>
<body>
<div>
    <h1>Reunião de lançamento UEX</h1>
    <form method="$_GET" action="lancamentoUex.php">


      <fieldset><legend>Informe a previsão do tempo para o dia da reunião</legend>

        <p> Previsão é de chuva? </p> <br>
          <input type="radio" name="clima" id="clima1" value="SIM" required> <label for="clima1">Sim</label>
          <input type="radio" name="clima" id="clima2" value="NÃO" required> <label for="clima2">Não</label>

      </fieldset>

      <input type="submit" class="botao" value="Analisar">

    </form>
    
    <?php
      
      $hoje = date('d/m/Y');
      $horaAtual = date('H:i');
      $localUex = "<p>Local: Rua Pasteur, 463, Agua Verde - Curitiba</p>";
      

      $clima = ($_GET["clima"] == "SIM") ? "Sim" : "Não";
      echo "<p>Previsão de chuva? : $clima</p>";
      $clima = $clima == "Sim" ? true : false;

      require_once 'Reuniao.php';

      $lancamentoUex = new Reuniao;
      $lancamentoUex -> data = "30/10/2021";
      $lancamentoUex -> horarioInicio = "08:30";
      $lancamentoUex -> horarioFinal = "12:30";
      $lancamentoUex -> local = $localUex;
      $lancamentoUex -> climaruim = $clima;


      $lancamentoUex -> Situacao();
      $lancamentoUex -> MostraDataReuniao();
      $lancamentoUex -> MostraLocal();

    
      echo "<p class= 'date';>$horaAtual hs</p>";
      echo "<p class= 'date';>$hoje</p>";
      
    ?>
</div>
</body>
</html>
 