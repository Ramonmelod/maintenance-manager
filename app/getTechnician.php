<?php

include './Technician.php';
include './getClient.php';

$technicians = [];

$technicians[0] = new Technician(0, "Emerson Gustavo", "emersongustavo@gmail.com", false, "senha");
$technicians[0]->addClient($clients[0]);
$technicians[0]->addClient($clients[1]);

$technicians[1] = new Technician(1, "Caio Glen", "caioglen@gmail.com", true, "senha");
$technicians[1]->addClient($clients[2]);
$technicians[1]->addClient($clients[3]);

$technicians[2] = new Technician(2, "Ramon Melo", "ramonmelo.com@gmail.com", true, "senha");
$technicians[2]->addClient($clients[4]);
$technicians[2]->addClient($clients[5]);

$technicians[3] = new Technician(3, "Kaleb Melo", "kalebmelo@gmail.com", false, "senha");
$technicians[3]->addClient($clients[6]);
$technicians[3]->addClient($clients[7]);

$technicians[4] = new Technician(4, "Lucas Silva", "lucassilva@gmail.com", true, "senha");
$technicians[4]->addClient($clients[8]);
$technicians[4]->addClient($clients[9]);

$technicians[5] = new Technician(5, "Ana Clara", "anaclara@gmail.com", false, "senha");
$technicians[5]->addClient($clients[10]);
$technicians[5]->addClient($clients[11]);

$technicians[6] = new Technician(6, "João Pedro", "joaopedro@gmail.com", true, "senha");
$technicians[6]->addClient($clients[12]);
$technicians[6]->addClient($clients[13]);

$technicians[7] = new Technician(7, "Mariana Costa", "marianacosta@gmail.com", false, "senha");
$technicians[7]->addClient($clients[14]);
$technicians[7]->addClient($clients[15]);

$technicians[8] = new Technician(8, "Paulo Henrique", "paulohenrique@gmail.com", true, "senha");
$technicians[8]->addClient($clients[16]);
$technicians[8]->addClient($clients[17]);

$technicians[9] = new Technician(9, "Fernanda Gomes", "fernandagomes@gmail.com", false, "senha");
$technicians[9]->addClient($clients[18]);
$technicians[9]->addClient($clients[19]);

$technicians[10] = new Technician(10, "Ricardo Souza", "ricardosouza@gmail.com", true, "senha");
$technicians[10]->addClient($clients[20]);
$technicians[10]->addClient($clients[21]);

$technicians[11] = new Technician(11, "Beatriz Lima", "beatrizlima@gmail.com", false, "senha");
$technicians[11]->addClient($clients[22]);
$technicians[11]->addClient($clients[23]);

$technicians[12] = new Technician(12, "Gabriel Alves", "gabrielalves@gmail.com", true, "senha");
$technicians[12]->addClient($clients[24]);
$technicians[12]->addClient($clients[25]);

$technicians[13] = new Technician(13, "Larissa Duarte", "larissaduarte@gmail.com", false, "senha");
$technicians[13]->addClient($clients[26]);
$technicians[13]->addClient($clients[27]);

$technicians[14] = new Technician(14, "Rafael Mendes", "rafaelmendes@gmail.com", true, "senha");
$technicians[14]->addClient($clients[28]);
$technicians[14]->addClient($clients[29]);

$technicians[15] = new Technician(15, "Camila Rocha", "camilarocha@gmail.com", false, "senha");
$technicians[15]->addClient($clients[30]);
$technicians[15]->addClient($clients[31]);

$technicians[16] = new Technician(16, "Thiago Oliveira", "thiagooliveira@gmail.com", true, "senha");
$technicians[16]->addClient($clients[32]);
$technicians[16]->addClient($clients[33]);

$technicians[17] = new Technician(17, "Juliana Martins", "julianamartins@gmail.com", false, "senha");
$technicians[17]->addClient($clients[34]);
$technicians[17]->addClient($clients[35]);

$technicians[18] = new Technician(18, "Diego Ferreira", "diegferreira@gmail.com", true, "senha");
$technicians[18]->addClient($clients[36]);
$technicians[18]->addClient($clients[37]);

$technicians[19] = new Technician(19, "Carolina Nunes", "carolnunes@gmail.com", false, "senha");
$technicians[19]->addClient($clients[38]);
$technicians[19]->addClient($clients[39]);

$technicians[20] = new Technician(20, "Felipe Braga", "felipebraga@gmail.com", true, "senha");
$technicians[20]->addClient($clients[40]);
?>
