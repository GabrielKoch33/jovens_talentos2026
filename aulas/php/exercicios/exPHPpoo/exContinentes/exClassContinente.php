<?php
include_once 'classPais.php';
include_once 'classContinente.php';

$oBrasil = new Pais('BRA','Brasil',(float)145682355);
$oBrasil->setPopulacao((float)24005522);

$oChile = new Pais('CHI','Chile',(float)82355);
$oChile->setPopulacao((float)335451);

$oJapao = new Pais('JAP','Japão',(float)145687);
$oJapao->setPopulacao((float)114556);

$oRussia = new Pais('RUS','Russia',(float)41575235);
$oRussia->setPopulacao((float)178982);

$oAmericaSul = new Continente ("América do Sul");
echo $oAmericaSul->adicionaPais($oChile);echo '<br>';
echo $oAmericaSul->adicionaPais($oBrasil);echo '<br>';
echo $oAmericaSul->dimensaoTotal();echo '<br>';
echo $oAmericaSul->populacaoTotal();echo '<br>';
echo $oAmericaSul->densidadeTotal();echo '<br>';
echo $oAmericaSul->maiorPopulacao();echo '<br>';
echo $oAmericaSul->menorPopulacao();echo '<br>';
echo $oAmericaSul->maiorTerritorio();echo '<br>';
echo $oAmericaSul->menorTerritorio();echo '<br>';
echo $oAmericaSul->DiffTamTerr();echo '<br>';


$oAsia = new Continente ('Ásia');echo '<br>';
echo $oAsia->adicionaPais($oJapao);echo '<br>';
echo $oAsia->adicionaPais($oRussia);echo '<br>';
echo $oAsia->dimensaoTotal();echo '<br>';
echo $oAsia->populacaoTotal();echo '<br>';
echo $oAsia->densidadeTotal();echo '<br>';
echo $oAsia->maiorPopulacao();echo '<br>';
echo $oAsia->menorPopulacao();echo '<br>';
echo $oAsia->maiorTerritorio();echo '<br>';
echo $oAsia->menorTerritorio();echo '<br>';
echo $oAsia->DiffTamTerr();echo '<br>';
?>