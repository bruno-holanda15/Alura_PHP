<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
    private $cargo;
    private $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento( float $aumento): void 
    {
        if($aumento < 0 ){
            echo "Aumento deve ser positivo ";
            return;
        }
        $this->salario += $aumento;
    }

    public function calculaBonificacao() :float
    {
        return $this->recuperaSalario() * 0.1;
    }



}
