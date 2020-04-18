<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\{ Pessoa, CPF};

class Dev extends Funcionario
{

    public function calculaBonificacao() :float
    {
        // return $this->recuperaSalario() * 0.3;
        return 500.0;
    }

    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.5);
    }

}