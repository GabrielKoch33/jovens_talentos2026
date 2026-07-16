<?php
require_once('classCliente.php');

class ClienteJuridico extends Cliente {

    private $cnpj;

    public function getCnpj(){
        return $this->cnpj;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
}
?>