<?php
class Pedido {
    private $saborDoBolo;
    private $quantidade;
    private $valorUnitario;


    public function getSaborDoBolo() {
        return $this->saborDoBolo;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getValorUnitario(){
        return $this->valorUnitario;
    }

    public function setSaborDoBolo($saborDoBolo){
        $this->saborDoBolo = $saborDoBolo;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function setValorUnitario($valorUnitario){
        $this->valorUnitario = $valorUnitario;
    }


    public function valorTotal(){
        $total = $this->getQuantidade() * $this->getValorUnitario();

        echo "Valor total do bolo: R$ {$total}";

        echo "</br>";
        
        echo"O sabor do bolo é: {$this->saborDoBolo}";
    }

}

?>