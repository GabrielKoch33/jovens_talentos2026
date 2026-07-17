<?php
require_once('classContaBancaria');

    class ContaPoupanca extends ContaBancaria {

        private $fTaxaJuros;

        public function __construct($TaxaDeJuros){
            $this->fTaxaJuros = $TaxaDeJuros; 
        }

        public function adicionarRendimento($fTaxaJuros){
            $saldoAtual = $this->getSaldo(); 
            $saldoAtual *= $this->fTaxaJuros/100;
            /*
            como ContaPoupança é uma filha de ContaBancaria ela herda TODOS os métodos(funções) 
            e atributos(variaveis) da classe pai.
            Chamamos o getSaldo() da classe pai, atribuimos a uma variavel qualquer e depois aplicamos 
            o atributo fTaxaJuros instanciado dessa classe
            */
        }
    };
?>