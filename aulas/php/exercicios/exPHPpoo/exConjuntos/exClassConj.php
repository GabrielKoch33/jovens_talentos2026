<?php
include_once 'classConjunto.php';

$oConjA = new Conjunto();

$oConjA->addElemento('A');
$oConjA->addElemento('C');
$oConjA->addElemento('F');
$oConjA->addElemento('I');
$oConjA->addElemento('M');

if($oConjA->existElemento('C')){
    echo 'Elemento existe';
} else {
    echo 'Elemento não existe';
}

$oConjB = new Conjunto();

$oConjB->addElemento('B');
$oConjB->addElemento('C');
$oConjB->addElemento('G');
$oConjB->addElemento('I');
$oConjB->addElemento('Z');

$oConjUniao = $oConjA->uniao($oConjB);
print($oConjUniao->getConjunto());

$oConjInter = $oConjA->inter($oConjB);
print($oConjInter->getConjunto());

$oConjMenos = $oConjA->menos($oConjB);
print($oConjMenos->getConjunto());

/*
U: unicos de A e únicos que B (não repetidos)
- [A,F,M,B,G,Z]

I: elementos de A que estão em B (não repetidos)
- [C,I]

M: elementos exclusivos de A
- [A,F,M]
*/
?>