<?php
include 'classUsuario.php';

class Administrador extends Usuario{

    public function hello(){
        echo 'Olá administrador'.$this->getNome();
    }
}


?>