<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        /*Abaixo a classe Caneta está sendo instanciada com o comando require.
        *
        *Para instanciar apenas uma vez no código usamos o require_once.
        */

        require_once 'Caneta.php';

        //Abaixo o OBJETO $caneta1 está recebendo os atributos e métodos da class Caneta.
        //para criar um novo objeto que pertence a uma classe, usamos o comando new seguido do nome da classe.

        $caneta1 = new Caneta;
        $caneta1 -> cor = "Azul";
        $caneta1 -> ponta = 0.5;
        $caneta1 -> tampada = true;
        $caneta1 -> carga = true;

        //Abaixo usamos as funções var_dump e print_r,
        //para mostrar os atributos na tela.
        //Essas funções mostram o tipo do atributo, string, boolean, etc.

        
        var_dump($caneta1);
        echo ('<br> <br>');
        print_r($caneta1);
        

        //Para chamar uma função ou método:

        $caneta1 -> destampar();
        $caneta1 -> rabiscar();

        //criando outro objeto

        $caneta2 = new Caneta;
        $caneta2 -> cor = "Vermelha";
        $caneta2 -> ponta = 1.0;
        $caneta2 -> tampada = false;

        $caneta2 -> destampar();
        $caneta2 -> rabiscar();

    ?>
</div>
</body>
</html>
 