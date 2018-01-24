<?php


class agencia
{
  public $numero; //atributo

  function __construct($numero)
  {
    $this->numero = $numero;
    echo "Agencia Criada: $numero" . PHP_EOL;
  }
}


$agencia = new agencia(1234);

$agencia2 = new agencia(4321);
