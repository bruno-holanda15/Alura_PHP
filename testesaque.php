<?php 

require_once 'autoload.php';
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$conta = new ContaPoupanca(
    new Titular(
        new CPF('455.497.568-11'),
        'Bruno',
        new Endereco('SP', 'Bairro' , 'Rua de ', '123')
    )
    
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();