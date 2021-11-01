
    <?php
        /*Classes são declaradas com class e o nome da class deve iniciar com letra maiuscula.
        *Dentro dela serão declarados as suas variáveis/atributos.
        */

        class Caneta {
          //Abaixo vão os ATRIBUTOS/variáveis da classe.
          //Declaramos também a propriedade, que pode ser: 
          //private, protected ou public.

          public $marca;
          private $validade;
          protected $ano;
          var $modelo;
          var $cor;
          var $ponta;
          var $carga;
          var $tampada;

          //Abaixo são declarados os METODOS/funções da classe,
          //usando o comando function e o nome do método.
          //Também declaramos se são public, private ou protected.

          public function rabiscar() {
              if ($this -> tampada == true) {
                  echo "Erro, não posso rabiscar. Estou tampada.";
              } else {
                  echo "Rabiscando...</br>";
              }
          }  
          function tampar() {
            $this -> tampada = true;
          }
          function destampar() {
            $this -> tampada = false;
          }
        }
    ?>
