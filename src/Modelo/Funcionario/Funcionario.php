<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
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

    abstract public function calculaBonificacao() :float;
  
}
