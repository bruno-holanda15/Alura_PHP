<?php

namespace Alura\Banco\Services;
use Alura\Banco\Modelo\Funcionario\Diretor;


class Autenticador
{

    public function tentaLogin(Diretor $diretor, string $senha) : void
    {
        if($diretor->podeAutenticar($senha)){
            echo "OK, usuário logado";
        }else {
            echo "Senha  incorreta";
        }
    }
}