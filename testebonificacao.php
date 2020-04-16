<?php 

require_once 'autoload.php';

use Alura\Banco\Services\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Funcionario, CPF};

$umFuncionario = new Funcionario(
                        'Brunin' ,
                        new CPF('455.497.568-11'),
                        'Dev',
                        1000
);


$umaFuncionaria = new Funcionario(
    'Lilalui' ,
    new CPF('455.497.568-11'),
    'Influencer',
    5000
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($umFuncionario);

echo $controlador->recuperaTotal();