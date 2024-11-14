<?php

include './client.php';
include './getAirConditioner.php';
// Criando um objeto Client
$cliente1 = new Client(1, "João Silva");
$cliente1->addAirConditioner($airConditioner1);
$cliente1->addAirConditioner($airConditioner2);

$cliente2 = new Client(2, "Pedro Alcântara");
$cliente2->addAirConditioner($airConditioner3);
$cliente2->addAirConditioner($airConditioner4);

$cliente3 = new Client(3, "Gustavo Afonso");
$cliente3->addAirConditioner($airConditioner5);
$cliente3->addAirConditioner($airConditioner6);

$cliente4 = new Client(4, "Jaison silva");
$cliente4->addAirConditioner($airConditioner7);
$cliente4->addAirConditioner($airConditioner8);

$cliente5 = new Client(5, "Maria Antônia");
$cliente5->addAirConditioner($airConditioner9);
$cliente5->addAirConditioner($airConditioner10);

// Exibindo as informações do cliente
var_dump($cliente1->getAirConditioner());
?>