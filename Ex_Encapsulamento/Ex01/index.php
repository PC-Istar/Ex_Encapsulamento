<?php

require_once 'Pedido.php';

$pedido = new Pedido;
$pedido->setValorUnitario(20);
$pedido->setSaborDoBolo("Cenoura");
$pedido->setQuantidade(5);

$pedido->valorTotal();


?>