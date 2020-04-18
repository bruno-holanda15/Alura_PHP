<?php

namespace Alura\Banco\Modelo\Funcionario;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao() :float
    {
        // return $this->recuperaSalario() * 0.3;
        return 600.0;
    }

}