<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor, EditorVideo};

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new Cpf('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new Cpf('124.453.329-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new Cpf('485.293.405-13'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new Cpf('345.123.543-43'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();