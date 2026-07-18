<?php
include_once 'classPessoa.php';

$oMaria = new Pessoa ('Maria','Terezinha','Silvano');

$oMario = new Pessoa ('Mario','Débora Koch','Marcos');

$oBernadete = new Pessoa ('Bernadete','Bisnaguinha', 'Ingoberto');

$oMaria2 = new Pessoa ('Maria','Terezinha','José');

$oGabriel = new Pessoa ('Gabriel','Débora Koch','José');

$oLuiz = new Pessoa ('Luiz','Ana','Lucio');

echo '<br>';

echo 'Antecessores de '. $oMaria->getNome() .' :';
print_r($oMaria->getAntecessores());

echo '<br>';

if ($oMaria->samePerson($oMaria2)){
    echo 'Pessoas iguais';
} else {
    echo 'Pessoas diferentes';
}

echo '<br>';

if ($oGabriel->saoIrmas($oMario)){
    echo $oGabriel->getNome() . ' é irmã(o) de ' . $oMario->getNome();
};

echo '<br>';

?>