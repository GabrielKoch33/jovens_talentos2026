<?php
    include_once 'classContaBancaria.php';
    include_once 'classClienteFisica.php';

    $oJoao = new ClienteFisica();
    $oJoao->setNome('João');
    $oJoao->setEmail('123@gmail.com');
    $oJoao->setTelefone('123456');
    $oJoao->setCpf('123.456.563-80');

    $oContaBanco = new ContaBancaria($oJoao);
    $oContaBanco->setSaldoInicial(500);
    $oContaBanco->Depositar(400);
    $oContaBanco->Sacar(100);
    $oContaBanco->exibeSaldo();
    $oContaBanco->Depositar(50);
    $oContaBanco->exibeExtrato();

?>
