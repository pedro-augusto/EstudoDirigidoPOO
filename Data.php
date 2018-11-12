<?php

    class Data {
        public $dia;
        public $mes;
        public $ano;

        function getData(){
            $texto= "{$this->dia}/{$this->mes}/{$this->ano}";
            return $texto;
        }
    }