<?php
    include("Data.php");

    class Funcionario {
        public $departamento;
        public $salario;
        public $CPF;
        public $dataEntrada;

        public function recebeAumento(){
            $novoSalario= $this->salario *1.10;
            $this->salario= $novoSalario;
        }

        public function calculaGanhoAnual(){
            $ganhoAnual= $this->salario*12;
            print($ganhoAnual);
        }

        public function mostra(){
            print("O funcionário do departamento {$this->departamento}, funcionário desde {$this->dataEntrada->getData()} possui salário de {$this->salario}");
        }
    }

