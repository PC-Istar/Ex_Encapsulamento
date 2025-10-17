<?php

require_once 'AlunoAcademia.php';

$aluno = new AlunoAcademia();
$aluno->setNome("Carlinhos");
$aluno->setPeso(92);
$aluno->setAltura(1.80);
$aluno->IMC();

?>