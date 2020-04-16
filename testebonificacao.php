<?php 

require_once 'autoload.php';

use Alura\Banco\Services\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{ Gerente, Diretor,Dev};


$umFuncionario = new Dev(
                        'Brunin' ,
                        new CPF('455.497.568-11'),
                        'Dev',
                        1000
);

$umFuncionario->sobeDeNivel();

$umDiretor = new Diretor(
    'Brunaoo' ,
    new CPF('455.497.568-11'),
    'Diretor',
    10000
);

$umaFuncionaria = new Gerente(
    'Lilalui' ,
    new CPF('455.497.568-11'),
    'Gerente',
    5000
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umDiretor);


echo $controlador->recuperaTotal();