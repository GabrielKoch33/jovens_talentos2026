<?php
    include 'classContaBancaria.php';
    include 'classClienteFisica.php';

    $oGabriel = new ClienteFisica();
    $oGabriel->setNome('Gabriel');
    $oGabriel->setEmail('123@gmail.com');
    $oGabriel->setTelefone('123456');
    $oGabriel->setCpf('123.456.563-80');

    $oContaBanco = new ContaBancaria();
    $oContaBanco->setCliente($oGabriel);
    $oContaBanco->setSaldoInicial(500);

    $oContaBanco-
    $oContaBanco
    $oContaBanco
    




?>
