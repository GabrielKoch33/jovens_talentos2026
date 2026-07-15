<?php
    require_once 'classClienteFisica.php';
    require_once 'classClienteJuridica.php';

    $oGabriel = new ClienteFisica();
//  VERSÃO COM ATRIBUTOS PUBLIC
    // $oGabriel = new Cliente();
    // $oGabriel->nome     = 'Gabriel';
    // $oGabriel->email    = 'abc@gmail';
    // $oGabriel->telefone = '123456789';
    // $oProfessor = new Cliente();
    // $oProfessor->nome     = 'Lucas';
    // $oProfessor->email    = 'xyz@gmail';
    // $oProfessor->telefone = '987654321';


//   VERSÃO COM ATRIBUTOS PRIVATE
    $oGabriel->setNome('Gabriel');
    $oGabriel->setEmail('abc@gmail.com');
    $oGabriel->setTelefone('123456789');
    $oGabriel->setCpf('083.123.123-56');

    $oProfessor = new ClienteJuridica();
    $oProfessor->setNome('Lucas');
    $oProfessor->setEmail('xyz@gmail.com');
    $oProfessor->setTelefone('987654321');
    $oProfessor->setCnpj('12345545/0043');

    echo 'Cliente 1: <br>';
    $oGabriel->exibir();
    echo '<br>';
    echo 'Cliente 2: <br>';
    $oProfessor->exibir();
    ?>
