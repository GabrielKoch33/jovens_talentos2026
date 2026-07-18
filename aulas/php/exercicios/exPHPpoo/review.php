<?php

$tipoNomeVariavel;
$iSomaNumeros;

include 'gera um alerta, porém o script continua';
require 'interrompe com fatal error';

< e <=
> e >=
== compara valor; 5 == '5' TRUE
=== compara valor e tipo; 5 === '5' FALSE
!= e !== funcionam igual aos == e ===

post = protege os dados do forms
get = deixa os dados visiveis na url

echo 'escreve normal';
print ('igual ao echo');
print_r ('escreve vetores');

echo 'aaa '. $variavelAqui .' lll';

for ('$variavelContador';'Condição de incrementacao';'auto incremento'){}

for ($i = 0; $i < 10;$i++){
    echo $i;
}

foreach ($aArray as $sValor){
    echo 'acessa apenas os valores do vetor';
}

foreach ($aArray as $iIndice => $sValor){
    echo 'acessa o indice e o valor; igual enumerate em python'
}

?>