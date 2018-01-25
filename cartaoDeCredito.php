<?php

      require 'lib/Carbon.php';
      use Carbon\Carbon;


class cartaoDeCredito
{
  public $numero; //atributo
  public $dataDeValidade; //atributo
  public $cliente; //atributo


  function __construct($numero, $dataDeValidade, $cliente)
    {
      $this->numero = $numero;
      $this->dataDeValidade = $dataDeValidade;
      $this->cliente = $cliente;
      echo "Cartao Criado: $numero" . PHP_EOL;
      echo "Data Validade: $dataDeValidade" . PHP_EOL;
      echo "Cliente: $cliente" . PHP_EOL;
    }
}


$cartao = new cartaoDeCredito(1212121, Carbon::createFromDate(2023, 5, 21, 'America/Sao_Paulo'), 'Lorem');



$cartao = new cartaoDeCredito(23233333, Carbon::createFromDate(2018, 5, 21, 'America/Sao_Paulo'), 'Ipsum');
