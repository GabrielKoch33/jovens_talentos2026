<?php 
require_once 'classPais.php';

$oArgentina = new Pais('ARG','Argentina',(float)1115246);
$oArgentina->setPopulacao((float)143200);

$oChile = new Pais('CHI','Chile',(float)1411002);
$oChile->setPopulacao((float)1458600);

$oChina = new Pais('CHI','China',(float)157558556);
$oChina->setPopulacao((float)100000000);

$oChile = new Pais('CON','Congo',(float)1478542);
$oChile->setPopulacao((float)1285200);

$oBrasil = new Pais('BRA','Brasil',(float)8510418);

$oBrasil->setPopulacao((float)24000000);

$oBrasil->inserePaisFronteira($oArgentina,$oChile);
echo '<hr>';
echo $oBrasil->retornaVizinhos($oBrasil);
echo '<hr>';
echo $oBrasil->removePaisFronteira($oChile);
echo '<hr>';
echo $oBrasil->retornaVizinhos($oBrasil);
echo '<hr>';
echo $oBrasil->fazFronteira($oArgentina);
echo '<hr>';
echo $oBrasil->calculaDensidadePopulacional();
echo str_repeat('<br>',3);

$oRussia = new Pais('RUS','Russia',(float)17098246);

$oRussia->setPopulacao((float)143000000);

$oRussia->inserePaisFronteira($oArgentina, $oChina, $oChile);
echo '<hr>';
echo $oRussia->retornaVizinhos($oRussia);
echo '<hr>';
echo $oRussia->removePaisFronteira($oChile);
echo '<hr>';
echo $oRussia->removePaisFronteira($oPindamonhangaba);
echo '<hr>';
echo $oRussia->retornaVizinhos($oRussia);
echo '<hr>';
echo $oRussia->fazFronteira($oBrasil);
echo '<hr>';
echo $oRussia->calculaDensidadePopulacional();
echo '<hr>';
echo $oRussia->paisAtual($oBrasil);
echo '<hr>';
echo $oRussia->paisAtual($oRussia);
?>