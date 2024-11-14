<?php

include './client.php';
include './getAirConditioner.php';
// Criando um objeto Client
$client1 = new Client(1, "João Silva");
$client1->addAirConditioner($airConditioner1);
$client1->addAirConditioner($airConditioner2);

$client2 = new Client(2, "Pedro Alcântara");
$client2->addAirConditioner($airConditioner3);
$client2->addAirConditioner($airConditioner4);

$client3 = new Client(3, "Gustavo Afonso");
$client3->addAirConditioner($airConditioner5);
$client3->addAirConditioner($airConditioner6);

$client4 = new Client(4, "Jaison silva");
$client4->addAirConditioner($airConditioner7);
$client4->addAirConditioner($airConditioner8);

$client5 = new Client(5, "Maria Antônia");
$client5->addAirConditioner($airConditioner9);
$client5->addAirConditioner($airConditioner10);

?>