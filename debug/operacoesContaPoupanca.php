<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContasTipo\ContaPoupanca;
use App\contratos\DadosContaBancariaInterface;
use App\contratos\OperacoesContaBancariaInterface;

function executarOperacoes(OperacoesContaBancariaInterface $contaBancaria){
    echo $contaBancaria->obterSaldo();
    echo PHP_EOL;

    echo $contaBancaria->depositar(30.50);
    echo PHP_EOL;

    echo $contaBancaria->obterSaldo();
    echo PHP_EOL;

    echo $contaBancaria->sacar(7.25);
    echo PHP_EOL;

    echo $contaBancaria->obterSaldo();
    echo PHP_EOL;
}

function exibirDados(DadosContaBancariaInterface $conta):void{
    echo "Banco: " . $conta->getBanco();
    echo PHP_EOL;
    
    echo "Ag./Conta: " . $conta->getNumeroAgencia() . "/". $conta->getNumeroConta();
    echo PHP_EOL;
    
    echo "Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "____________________________";
    echo PHP_EOL;

}

$contaBancaria = new ContaPoupanca(
    "Santander",
    "Gabriel Plautz",
    "7246-2",
    "57354-10",
    50
);

exibirDados($contaBancaria);
executarOperacoes($contaBancaria);