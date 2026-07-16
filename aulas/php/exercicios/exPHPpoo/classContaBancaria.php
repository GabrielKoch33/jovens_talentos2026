<?php

require_once('classClienteFisica.php');
class ContaBancaria {

    private $Cliente;
    private $sDataCriacao;
    private $fSaldoInicial;
    private $fSaldoAtual;
    private $aOperacoes = [];

    public function setCliente($clienteDados){
        $this->Cliente = $clienteDados;
    }
    public function getCliente(){
        return $this->Cliente;
    }

    public function getSaldo(){
        return $this->fSaldoAtual;
    }

    public function setSaldoInicial($fValorSaldoInicial) { 
        $this->fSaldoInicial = $fValorSaldoInicial; 
        $this->fSaldoAtual = $fValorSaldoInicial; 
        $this->registraLogExtrato('Saldo Inicial', $fValorSaldoInicial); 
    } 

    public function Sacar($fValor){#setter
        echo '<br>';
        $this->fSaldoAtual -= $fValor;    

        $sNomeCliente_ = $this->Cliente->getNome();
        $fValorSaque_ = $fValor;
        $fSaldoAtual_ = $this->fSaldoAtual;

        $this->registraLogExtrato('Saque',$fValor);
        echo 'Realizado saque do cliente '.$sNomeCliente_.' no valor de R$'. $fValorSaque_.'. Saldo atual: R$'.$fSaldoAtual_;
    }

    public function Depositar($fValor) {
        echo '<br>';
        $this->fSaldoAtual += $fValor; 
        
        $sNomeCliente_ = $this->Cliente->getNome(); 
        $fValorDeposito_ = $fValor; 
        $fSaldoAtual_ = $this->fSaldoAtual; 
        
        $this->registraLogExtrato('Depósito', $fValor); 
        
        echo 'Realizado depósito do cliente ' . $sNomeCliente_ . ' no valor de R$' . $fValorDeposito_ . '. Saldo atual: R$' . $fSaldoAtual_; 
    } 

    public function exibeSaldo(){ #getter
        echo '<br>';
        $sNomeCliente_ = $this->Cliente->getNome();
        $fSaldoAtual_ = $this->fSaldoAtual;
        echo 'Saldo atual do cliente'. $sNomeCliente_ .'R$'.$fSaldoAtual_; 
    }

    public function exibeExtrato(){ #getter
        echo '<br>';
        echo 'OPERAÇÃO | VALOR<br>';
        foreach ($this->aOperacoes as [$operacao,$valor]){
            echo $operacao.' | R$'. $valor. '<br>';
        }
    }
    public function registraLogExtrato($operacao,$valor){ #setter
        $this->aOperacoes[] = [$operacao,$valor];
    }
}
?>