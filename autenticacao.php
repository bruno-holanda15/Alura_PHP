<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Services\Autenticador;


$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'Joao da Silva',
    new CPF('455.497.568-11'),
    5000 
);

$autenticador->tentaLogin($umDiretor, '11124');
