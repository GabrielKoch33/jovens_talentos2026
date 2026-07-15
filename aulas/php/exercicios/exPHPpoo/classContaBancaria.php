<?php
include('classClienteFisica.php')
class ContaBancaria {

    private $Cliente;
    private $sDataCriacao;
    private $fSaldoInicial;
    private $fSaldoAtual;
    private $aOperacoes = [];

    public function setCliente($clienteDados){
        $this->Cliente = $oGabriel;
    }
    public function getCliente(){
        return $this->Cliente;
    }

    public function setSaldoInicial($fSaldoInicial){
        $this->SaldoInicial = $fSaldoInicial;
        $this->SaldoAtual = $fSaldoInicial;

        registraLogExtrato('Saldo Inicial',$fSaldoInicial);
    }

    public function Sacar($fValor){#setter
        $this->SaldoAtual -= $fValor;    

        $sNomeCliente_ = $this->$Cliente->$nome;
        $fValorSaque_ = $this->$fValor;
        $fSaldoAtual_ = $this->SaldoAtual;

        registraLogExtrato('Saque',$fValor);
        echo 'Realizado saque do cliente '.$sNomeCliente_.' no valor de R$'. $fValorSaque_.'. Saldo atual: R$'.$fSaldoAtual_.;
    }

    public function Depositar($fValor){#setter
        $this->SaldoAtual += $fValor;

        $sNomeCliente_ = $this->$Cliente->$nome;
        $fValorDeposito_ = $this->$fValor;
        $fSaldoAtual_ = $this->SaldoAtual;

        registraLogExtrato('Depósito',$fValor);
        echo 'Realizado depósito do cliente '.$sNomeCliente_.' no valor de R$'. $fValorDeposito_.'. Saldo atual: R$'.$fSaldoAtual_.;

    }

    public function exibeSaldo(){ #getter

    }

    public function exibeExtrato(){ #getter
        
    }

    public function registraLogExtrato(operacao,valor){ #setter
        array_push($aOperacoes,(operacao,valor));
    }
}
?>