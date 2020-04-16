<?php

namespace Alura\Banco\Services;
use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{

    private $totalDeBonificacoes = 0;

    public function adicionaBonificacao( Funcionario $funcionario )
    {
        $this->totalDeBonificacoes += $funcionario->calculaBonificacao();

    }

    public function recuperaTotal() : float 
    {
        return $this->totalDeBonificacoes;
    }



}