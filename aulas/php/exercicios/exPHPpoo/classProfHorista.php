<?php
include_once 'classProfessor.php';

class ProfessorHorista extends Professor{

    private $iHorasTrabalhadas = 0;
    private $fSalarioHora = 0;
    private $fSalarioFinal = 0;

    public function setHorasTrabalhadas($iValorHorasTrabalhadas){
        $this->iHorasTrabalhadas = $iValorHorasTrabalhadas;
    }

    public function setSalarioPorHora($fSalarioHora){
        $this->fSalarioHora = $fSalarioHora;
    }

    public function calculaSalario($fValorSalario){
        $this->fSalarioFinal = $this->iHorasTrabalhadas  * $this->fSalarioHora;
    }

}
?>