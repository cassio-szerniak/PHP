<?php

class Reuniao {

    public $data;
    public $horarioInicio;
    public $horarioFinal;
    public $local;
    public $climaruim;
    public $climabom;

    public function MostraDataReuniao() {
        if ($this -> data > date("d/m/y") && $this->climaruim!=true) {
            echo "<p>Será dia {$this->data} as {$this->horarioInicio}hs.</p>";
        }

    }

    public function Situacao() {
        if (date('d/m/Y') < $this->data) {
            echo "Hoje dia ";
            echo date('d/m/Y');
            echo " é posterior a {$this->data}.";
            echo "</br> A data da reunião já passou.";
        } else {
            
            echo "Situação da reunião: ";
            $msg = ($this -> climaruim == true) ? "<p>Cancelada por causa da chuva.</br>Será reagendada e o convite reenviado por e-mail.</p>"
        : "<p>A reunião está de pé!</p>";
            echo $msg;
        }
    
    }

    public function MostraLocal() {
        echo $this -> local;
        
    }

}

?>