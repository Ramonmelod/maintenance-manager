<?php

include './airConditioner.php';
// Criando um objeto Aparelho
$airConditioner1 = new airConditioner(0, 12000, "Samsung", 2020, true, "2024-10-10");
$airConditioner2 = new airConditioner(1, 24000, "LG", 2021, false, "2024-08-15");
$airConditioner3 = new airConditioner(2, 18000, "Fujitsu", 2022, true, "2024-06-30");
$airConditioner4 = new airConditioner(3, 18000, "hitachi", 2022, true, "2024-06-30"); 
$airConditioner5 = new airConditioner(4, 9000, "Midea", 2019, false, "2024-11-01");
$airConditioner6 = new airConditioner(5, 36000, "Daikin", 2023, true, "2024-09-20");
$airConditioner7 = new airConditioner(6, 12000, "Panasonic", 2020, true, "2024-10-05");
$airConditioner8 = new airConditioner(7, 24000, "Sharp", 2021, false, "2024-08-10");
$airConditioner9 = new airConditioner(8, 15000, "Gree", 2018, true, "2024-07-25");
$airConditioner10 = new airConditioner(9, 18000, "Carrier", 2022, false, "2024-06-15");

//var_dump($airConditioner1->getBrand());
?>