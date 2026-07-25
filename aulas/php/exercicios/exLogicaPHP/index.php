<?php
include_once 'calculos.php';

$oTeste = new Calculo;

echo $oTeste->maiorValor(5,2);
echo '<br>';
echo $oTeste->calculaAreaTriangulo(20,6);
echo '<br>';
echo $oTeste->valorAoCubo(3);
echo '<br>';
print_r($oTeste->numCrescentes(7,3,5));
echo '<br>';
echo $oTeste->mediaAprovado(7.4,5.5);
echo '<br>';
echo $oTeste->comparaSoma(23,3,26);
echo '<br>';
print_r($oTeste->operacoes(4,2));
echo '<br>';
echo $oTeste->folhaVendedor('Anderson',3000,4355);
echo '<br>';
echo $oTeste->precoCarro(90000);
echo '<br>';
echo $oTeste->distanciaCordenadas(4,6,2,4);
echo '<br>';
?>