<?php 

require_once 'autoload.php';
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$conta = new Conta(
    new Titular(
        new CPF('455.497.568-11'),
        'Bruno',
        new Endereco('SP', 'Bairro' , 'Rua de ', '123')
    ),
    2
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();