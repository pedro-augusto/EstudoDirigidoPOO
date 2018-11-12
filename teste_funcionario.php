<?php

    include 'Funcionario.php';

    //FUNCIONÁRIO 1

    $funcionario1= new Funcionario();
    $funcionario1-> departamento= "RH";
    $funcionario1-> salario = 20000;
    $funcionario1-> CPF= "012.102.289-05";

    $dataFuncionario1= new Data();
    $dataFuncionario1->dia = 22;
    $dataFuncionario1->mes = 10;
    $dataFuncionario1->ano= 2001;

    $funcionario1->dataEntrada= $dataFuncionario1;

    //FUNCIONÁRIO 2

    $funcionario2= new Funcionario();
    $funcionario2->departamento= "Marketing";
    $funcionario2->salario= 10000;
    $funcionario2->CPF= "145.985.475-02";

    $dataFuncionario2= new Data();
    $dataFuncionario2-> dia= 15;
    $dataFuncionario2-> mes= 11;
    $dataFuncionario2-> ano= 2015;

    $funcionario2->dataEntrada= $dataFuncionario2;

    //TESTES

    //print_r($funcionario1);
    //print_r($funcionario2);
    //$funcionario1->recebeAumento();
    //$funcionario2->calculaGanhoAnual();

    $funcionario1->mostra();
    print("\n");
    $funcionario2->mostra();