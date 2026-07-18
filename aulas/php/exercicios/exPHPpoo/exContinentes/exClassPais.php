<?php 
require_once 'classPais.php';

$oBrasil = new Pais('BRA','Brasil',(float)8510418);

$oBrasil->setPopulacao((float)24000000);

$oBrasil->inserePaisFronteira('Argentina','Uruguai','Bolívia','Guiana Francesa','Suriname','Chile');
echo '<hr>';
echo $oBrasil->retornaVizinhos($oBrasil);
echo '<hr>';
echo $oBrasil->removePaisFronteira('Chile');
echo '<hr>';
echo $oBrasil->retornaVizinhos($oBrasil);
echo '<hr>';
echo $oBrasil->fazFronteira('Argentina');
echo '<hr>';
echo $oBrasil->calculaDensidadePopulacional();
echo str_repeat('<br>',3);

$oRussia = new Pais('RUS','Russia',(float)17098246);

$oRussia->setPopulacao((float)143000000);

$oRussia->inserePaisFronteira('Argentina','China','Noruega','Finlândia','Mongólia','Coreia do Norte','Ucrânia');
echo '<hr>';
echo $oRussia->retornaVizinhos($oRussia);
echo '<hr>';
echo $oRussia->removePaisFronteira('Argentina');
echo '<hr>';
echo $oRussia->removePaisFronteira('Pindamonhangaba');
echo '<hr>';
echo $oRussia->retornaVizinhos($oRussia);
echo '<hr>';
echo $oRussia->fazFronteira('Austrália');
echo '<hr>';
echo $oRussia->calculaDensidadePopulacional();
echo '<hr>';
echo $oRussia->paisAtual($oBrasil);
echo '<hr>';

echo $oRussia->paisAtual($oRussia);
?>