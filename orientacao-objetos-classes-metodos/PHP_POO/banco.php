<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$vinicius = new Titular( new Cpf('123.456.789-10'), 'Guilherme Martins');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

$segundaConta = new Conta(new Titular(new Cpf('546.343.345-12'), 'Mayara Martins'));
var_dump($segundaConta);

$terceiraConta = new Conta(new Titular(new Cpf('544'), 'André Camilles'));

echo Conta::recuperaNumeroDeContas();
