<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, Conta};
use Alura\Banco\Modelo\{Endereco, Cpf};

$endereco = new Endereco('Petropolis', 'Jardins', 'Silveira', '71B');
$vinicius = new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

$patricia = new Titular(new Cpf('987.654.321-01'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

echo $segundaConta->recuperaSaldo() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaNomeTitular() . PHP_EOL;

$outroEndereco = new Endereco('A', 'B', 'C', '1D');
$outra = new Conta(new Titular(new Cpf('159.456.789-10'), 'asdfasdf', $outroEndereco));
unset($segundaConta);

echo Conta::recuperaNumeroDeContas();