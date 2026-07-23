<?php

require_once 'classUsuario.php';

class UsuarioCliente extends Usuario{

    public function hello(){
        $sOla =  parent::hello();
        echo $sOla.'. Seja bem vindo!';
    }
}
?>