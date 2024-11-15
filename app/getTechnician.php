<?php

include './Technician.php';

// Criando um objeto Tecnico
$tecnico1 = new Technician(1, "Carlos Silva", true, "senha123");
$tecnico2 = new Technician(2, "Kaleb Melo", false, "senha");
$tecnico3 = new Technician(3, "Ramon Melo", true, "senha");

echo $tecnico1->getName();

?>