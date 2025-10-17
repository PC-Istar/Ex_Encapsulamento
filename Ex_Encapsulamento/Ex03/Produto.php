<?php

class Produto{
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setEstoque($estoque);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function setNome($nome){
        return $this->nome = $nome;
    }

    public function setPreco($preco){
        return $this->preco = $preco;
    }

    public function setEstoque($estoque){
        if (is_int($estoque) && $estoque >= 0) {
            $this->estoque = $estoque;
        } else {
            echo "Erro";
        }
    }

    public function vender ($quantidade) {
        if ($quantidade <= 0) {
            echo "Erro";
        }


        if ($quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;
            echo "Venda Ralizada! </br> Quantidade vendida: $quantidade </br> Estoque Restante: {$this->estoque} </br> Valor: {$this->preco} </br>";
        } else {
            echo "Erro";
        }
        
        
    }




}
?>