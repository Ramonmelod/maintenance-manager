<?php

include_once './client.php';
include './getAirConditioner.php';

$clients = [];
$clients[0] = new Client(1, "João Silva","joaosilva@gmail.com");
$clients[0]->addAirConditioner($airConditioners[0]);
$clients[0]->addAirConditioner($airConditioners[1]);

$clients[1] = new Client(2, "Pedro Alcântara", "pedroalcantara@gmail.com");
$clients[1]->addAirConditioner($airConditioners[2]);
$clients[1]->addAirConditioner($airConditioners[3]);

$clients[2] = new Client(3, "Maria Oliveira", "mariaoliveira@gmail.com");
$clients[2]->addAirConditioner($airConditioners[4]);
$clients[2]->addAirConditioner($airConditioners[5]);

$clients[3] = new Client(4, "Carlos Pereira", "carlospereira@gmail.com");
$clients[3]->addAirConditioner($airConditioners[6]);
$clients[3]->addAirConditioner($airConditioners[7]);

$clients[4] = new Client(5, "Fernanda Costa", "fernandacosta@gmail.com");
$clients[4]->addAirConditioner($airConditioners[8]);
$clients[4]->addAirConditioner($airConditioners[9]);

$clients[5] = new Client(6, "Rafael Souza", "rafaelsouza@gmail.com");
$clients[5]->addAirConditioner($airConditioners[10]);
$clients[5]->addAirConditioner($airConditioners[11]);

$clients[6] = new Client(7, "Aline Santos", "alinesantos@gmail.com");
$clients[6]->addAirConditioner($airConditioners[12]);
$clients[6]->addAirConditioner($airConditioners[13]);

$clients[7] = new Client(8, "Gabriel Lima", "gabriellima@gmail.com");
$clients[7]->addAirConditioner($airConditioners[14]);
$clients[7]->addAirConditioner($airConditioners[15]);

$clients[8] = new Client(9, "Luiza Martins", "luizasmartins@gmail.com");
$clients[8]->addAirConditioner($airConditioners[16]);
$clients[8]->addAirConditioner($airConditioners[17]);

$clients[9] = new Client(10, "José Almeida", "josealmeida@gmail.com");
$clients[9]->addAirConditioner($airConditioners[18]);
$clients[9]->addAirConditioner($airConditioners[19]);

$clients[10] = new Client(11, "Juliana Ribeiro", "julianaribeiro@gmail.com");
$clients[10]->addAirConditioner($airConditioners[20]);
$clients[10]->addAirConditioner($airConditioners[21]);

$clients[11] = new Client(12, "André Silva", "andresilva@gmail.com");
$clients[11]->addAirConditioner($airConditioners[22]);
$clients[11]->addAirConditioner($airConditioners[23]);

$clients[12] = new Client(13, "Vanessa Rocha", "vanessarocha@gmail.com");
$clients[12]->addAirConditioner($airConditioners[24]);
$clients[12]->addAirConditioner($airConditioners[25]);

$clients[13] = new Client(14, "Eduardo Souza", "eduardosouza@gmail.com");
$clients[13]->addAirConditioner($airConditioners[26]);
$clients[13]->addAirConditioner($airConditioners[27]);

$clients[14] = new Client(15, "Patrícia Costa", "patriciacosta@gmail.com");
$clients[14]->addAirConditioner($airConditioners[28]);
$clients[14]->addAirConditioner($airConditioners[29]);

$clients[15] = new Client(16, "Ricardo Oliveira", "ricardooliveira@gmail.com");
$clients[15]->addAirConditioner($airConditioners[30]);
$clients[15]->addAirConditioner($airConditioners[31]);

$clients[16] = new Client(17, "Bruna Lima", "brunalima@gmail.com");
$clients[16]->addAirConditioner($airConditioners[32]);
$clients[16]->addAirConditioner($airConditioners[33]);

$clients[17] = new Client(18, "Felipe Costa", "felipecosta@gmail.com");
$clients[17]->addAirConditioner($airConditioners[34]);
$clients[17]->addAirConditioner($airConditioners[35]);

$clients[18] = new Client(19, "Tatiane Santos", "tatianesantos@gmail.com");
$clients[18]->addAirConditioner($airConditioners[36]);
$clients[18]->addAirConditioner($airConditioners[37]);

$clients[19] = new Client(20, "Alexandre Pereira", "alexandrepereira@gmail.com");
$clients[19]->addAirConditioner($airConditioners[38]);
$clients[19]->addAirConditioner($airConditioners[39]);

$clients[20] = new Client(21, "Roberta Almeida", "robertaalmeida@gmail.com");
$clients[20]->addAirConditioner($airConditioners[40]);
$clients[20]->addAirConditioner($airConditioners[41]);

$clients[21] = new Client(22, "Sérgio Rocha", "sergiorocha@gmail.com");
$clients[21]->addAirConditioner($airConditioners[42]);
$clients[21]->addAirConditioner($airConditioners[43]);

$clients[22] = new Client(23, "Carla Martins", "carlamartins@gmail.com");
$clients[22]->addAirConditioner($airConditioners[44]);
$clients[22]->addAirConditioner($airConditioners[45]);

$clients[23] = new Client(24, "Maurício Oliveira", "mauriciooliveira@gmail.com");
$clients[23]->addAirConditioner($airConditioners[46]);
$clients[23]->addAirConditioner($airConditioners[47]);

$clients[24] = new Client(25, "Renata Souza", "renatasouza@gmail.com");
$clients[24]->addAirConditioner($airConditioners[48]);
$clients[24]->addAirConditioner($airConditioners[49]);

$clients[25] = new Client(26, "Lucas Lima", "lucaslima@gmail.com");
$clients[25]->addAirConditioner($airConditioners[50]);
$clients[25]->addAirConditioner($airConditioners[51]);

$clients[26] = new Client(27, "Juliana Costa", "julianacosta@gmail.com");
$clients[26]->addAirConditioner($airConditioners[52]);
$clients[26]->addAirConditioner($airConditioners[53]);

$clients[27] = new Client(28, "Pedro Lima", "pedrolima@gmail.com");
$clients[27]->addAirConditioner($airConditioners[54]);
$clients[27]->addAirConditioner($airConditioners[55]);

$clients[28] = new Client(29, "Mariana Santos", "marianasantos@gmail.com");
$clients[28]->addAirConditioner($airConditioners[56]);
$clients[28]->addAirConditioner($airConditioners[57]);

$clients[29] = new Client(30, "Tiago Almeida", "tiagoalmeida@gmail.com");
$clients[29]->addAirConditioner($airConditioners[58]);
$clients[29]->addAirConditioner($airConditioners[59]);

$clients[30] = new Client(31, "Ana Paula", "anapaula@gmail.com");
$clients[30]->addAirConditioner($airConditioners[60]);
$clients[30]->addAirConditioner($airConditioners[61]);

$clients[31] = new Client(32, "Luciana Martins", "lucianamartins@gmail.com");
$clients[31]->addAirConditioner($airConditioners[62]);
$clients[31]->addAirConditioner($airConditioners[63]);

$clients[32] = new Client(33, "Douglas Pereira", "douglaspereira@gmail.com");
$clients[32]->addAirConditioner($airConditioners[64]);
$clients[32]->addAirConditioner($airConditioners[65]);

$clients[33] = new Client(34, "Simone Costa", "simonacosta@gmail.com");
$clients[33]->addAirConditioner($airConditioners[66]);
$clients[33]->addAirConditioner($airConditioners[67]);

$clients[34] = new Client(35, "Leonardo Lima", "leonardolima@gmail.com");
$clients[34]->addAirConditioner($airConditioners[68]);
$clients[34]->addAirConditioner($airConditioners[69]);

$clients[35] = new Client(36, "Beatriz Oliveira", "beatrizoliveira@gmail.com");
$clients[35]->addAirConditioner($airConditioners[70]);
$clients[35]->addAirConditioner($airConditioners[71]);

$clients[36] = new Client(37, "Patrícia Almeida", "patriciaalmeida@gmail.com");
$clients[36]->addAirConditioner($airConditioners[72]);
$clients[36]->addAirConditioner($airConditioners[73]);

$clients[37] = new Client(38, "Marcos Costa", "marcoscosta@gmail.com");
$clients[37]->addAirConditioner($airConditioners[74]);
$clients[37]->addAirConditioner($airConditioners[75]);

$clients[38] = new Client(39, "Sandra Lima", "sandralima@gmail.com");
$clients[38]->addAirConditioner($airConditioners[76]);
$clients[38]->addAirConditioner($airConditioners[77]);

$clients[39] = new Client(40, "Fabiana Martins", "fabanmartins@gmail.com");
$clients[39]->addAirConditioner($airConditioners[78]);
$clients[39]->addAirConditioner($airConditioners[79]);

$clients[40] = new Client(41, "Vinícius Rocha", "viniciusrocha@gmail.com");
$clients[40]->addAirConditioner($airConditioners[80]);
?>