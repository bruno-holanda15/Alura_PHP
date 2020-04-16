<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\{ Pessoa, CPF};

class Gerente extends Funcionario
{

    public function calculaBonificacao() :float
    {
        return $this->recuperaSalario();
    }

}