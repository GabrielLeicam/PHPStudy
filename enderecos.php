<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petropolis', 'Qualquer', 'Rua', '32B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua', '50');

echo $umEndereco->cidade . PHP_EOL;
$umEndereco->cidade = 'Nova cidade';

echo $umEndereco . PHP_EOL;
echo $outroEndereco;