<?php


class agencia
{
  public $numero; //atributo

  function __construct()
  {
    echo "Agencia Criada" . PHP_EOL;
  }
}


$agencia = new agencia();
$agencia->numero = 1234;
$agencia2 = new agencia();
$agencia2->numero = 4321;


echo "Agencia1 : $agencia->numero" . PHP_EOL;;

echo "Agencia2 : $agencia2->numero" . PHP_EOL;;
