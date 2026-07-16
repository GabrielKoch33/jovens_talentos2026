<?php
require_once('classContaBancaria');

    class ContaPoupanca extends ContaBancaria {

        private $fTaxaJuros;

        public function __construct($fTaxaJuros){
            parent:: getSaldo();

        }

        public function AdicionarRendimento(){

        }
    };
?>