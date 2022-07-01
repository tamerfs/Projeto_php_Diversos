<?php

declare(strict_types=1); 
// para fazer checagem de tipos com o php

class  ContaBancaria
{
        private int $banco;
        private $nomeTItular;
        private $numeroAgencia;
        private $numeroConta;
        private $saldo;

        public function __construct(string $banco, string $nomeTItular, string $numeroAgencia, string $numeroConta,float $saldo)
        {
            $this -> banco = $banco;
            $this -> nomeTItular = $nomeTItular;
            $this -> numeroAgencia = $numeroAgencia;
            $this -> numeroConta = $numeroConta;
            $this -> saldo = $saldo;
        }
   
        public function obterSaldo()
        {
            return 'Seu saldo atual é ' . $this -> saldo ;
        }

        public function depositar($valor)
        {
            $this -> saldo += $valor;
            return  'deposito de R$: ' . $valor . " realizado!.";
        }
        public function sacar($valor)
        {
            $this -> saldo -= $valor;
            return  'saque de R$: ' . $valor . " realizado!.";
        }

}



$conta = new ContaBancaria(
    'banco bradesco', //banco
    'tamer Serhan',//nomeTitular
    '1234',//numeroAgencia
    '56789',//numeroConta
    0//saldo
);

$conta2 = new ContaBancaria(
    'banco bradesco', //banco
    'tamer Serhan',//nomeTitular
    '1234',//numeroAgencia
    '56789',//numeroConta
    0//saldo
);
$conta3 = new ContaBancaria(
    'banco bradesco', //banco
    'tamer Serhan',//nomeTitular
    '1234',//numeroAgencia
    '56789',//numeroConta
    0//saldo
);


echo $conta ->obterSaldo();

echo PHP_EOL;

echo $conta->depositar(300.00);

echo PHP_EOL;



echo $conta ->obterSaldo();

echo PHP_EOL;

echo $conta->sacar(100.00);;

echo PHP_EOL;



echo $conta ->obterSaldo();
// criando um objeto conta bancaria e atribuit uma variavel





