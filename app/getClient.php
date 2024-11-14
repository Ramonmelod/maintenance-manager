<?php

include './client.php';
include './getaparelhoArCondicionado.php';
// Criando um objeto Client
$cliente1 = new Client(1, "João Silva");
$cliente1->addAirConditioner($aparelho1);
$cliente1->addAirConditioner($aparelho2);

$cliente2 = new Client(1, "João Silva");
$cliente2->addAirConditioner($aparelho1);
$cliente2->addAirConditioner($aparelho2);

$cliente3 = new Client(1, "João Silva");
$cliente3->addAirConditioner($aparelho1);
$cliente3->addAirConditioner($aparelho2);

$cliente4 = new Client(1, "João Silva");
$cliente4->addAirConditioner($aparelho1);
$cliente4->addAirConditioner($aparelho2);

$cliente5 = new Client(1, "João Silva");
$cliente5->addAirConditioner($aparelho1);
$cliente5->addAirConditioner($aparelho2);

// Exibindo as informações do cliente
var_dump($cliente1->getAirConditioner());
?>