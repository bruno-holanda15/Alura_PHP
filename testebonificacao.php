<?php 

require_once 'autoload.php';

use Alura\Banco\Services\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{ Gerente, Diretor, Dev, EditorVideo};


$umFuncionario = new Dev(
    'Brunin' ,
    new CPF('455.497.568-11'),
    1000
);

$umFuncionario->sobeDeNivel();

$umDiretor = new Diretor(
    'Brunaoo' ,
    new CPF('455.497.568-11'),
    10000
);

$umaFuncionaria = new Gerente(
    'Lilalui' ,
    new CPF('455.497.568-11'),
    5000
);


$umEditor = new EditorVideo(
    'Viniciues' ,
    new CPF('455.497.568-11'),
    1400
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umEditor);



echo $controlador->recuperaTotal();