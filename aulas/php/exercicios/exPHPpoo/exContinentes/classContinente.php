<?php

class Continente {

    private $nomeContinente = '';
    private $listaPaises    = [];

    public function __construct($sNome){
        $this->nomeContinente = $sNome;
    }

    public function adicionaPais($oObjPais){
        $this->listaPaises[] = $oObjPais;
    }

    public function dimensaoTotal(){
        $fTotDimensao = 0;
        foreach($listaPaises as $pais){
            $this->pais->get
        }
    }

}
?>