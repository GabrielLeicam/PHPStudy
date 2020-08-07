<?php

namespace Alura\Banco\Modelo;

class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->validaCpf($numero);
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    private function validaCpf(string $numero)
    {
        if(strlen($numero) < 14 or strlen($numero) > 14) {
            echo "Insira um CPF válido.";
            exit();
        }
    }
}