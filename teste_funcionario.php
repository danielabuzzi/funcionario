<?php

require __DIR__."/Funcionario.php";
require __DIR__."/data.php";


$dani = new Funcionario();

$dani->nome = "Daniela Buzzi";
$dani->departamento = "Financeiro";
$dani->salario = 6000;
$dani->cpf = "117.658.911-89";
$dani->recebeAumento();

$dataEntrada = new Data();
$dataEntrada->dia = 17;
$dataEntrada->mes = 2;
$dataEntrada->ano = 2002;

$dani->dataEntrada = $dataEntrada;

$aumento = $dani->recebeAumento();
$ganhoAnual = $dani->calculaGanhoAnual();
print_r($dani);

$fran = new Funcionario();

$fran->nome = "Francieli da Rosinha";
$fran->departamento = "administrativo";
$fran->salario = 2000; 
$fran->cpf = "102.419.754-54";
$fran->recebeAumento();

$dataEntrada = new Data();
$dataEntrada->dia = 11;
$dataEntrada->mes = 02;
$dataEntrada->ano = 2007;

$fran->dataEntrada = $dataEntrada;

$aumento = $fran->recebeAumento();
$ganhoAnual = $fran->calculaGanhoAnual();
print_r($fran);


