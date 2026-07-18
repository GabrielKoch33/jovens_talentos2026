<?php

include_once 'classProfessor.php';
class ProfessorRegime extends Professor{

    private $iCargaHoraria = 0;
    private $fSalario = 0;

    public function __construct($iValorCargaHoraria, $fValorSalario){
        $this->iCargaHoraria = $iValorCargaHoraria;
        $this->fSalario = $fValorSalario;
    }

    public function calculaSalario($fSalario){
        return $this->fSalario;
    }
}
?>