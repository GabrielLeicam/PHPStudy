<?php

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\{Cpf, Endereco};
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor};

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João da Silva',
    new Cpf('394.532.913-59'),
    5000
);

$autenticador->tentaLogin($umDiretor, '4321');