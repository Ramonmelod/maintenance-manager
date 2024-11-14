<?php
// Incluindo a classe Tecnico e Aparelho
include './getTecnico.php';
include './getAirConditioner.php';


session_start();

if ($_SESSION['tecnico']==$tecnico1->getId()) {
    $airConditioners = [$airConditioner1, $airConditioner2, $airConditioner3,$airConditioner4];
}else if ($_SESSION['tecnico']==$tecnico2->getId()) {
        $airConditioners = [$airConditioner1, $airConditioner2];
    
}else{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Técnico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        .panel-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 900px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-logout {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-logout:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>

    <div class="panel-container">
        <h2>Painel do Técnico - Aparelhos de Ar Condicionado</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Capacidade de Resfriamento (BTUs)</th>
                    <th>Marca</th>
                    <th>Ano de Fabricação</th>
                    <th>Inverter</th>
                    <th>Última Limpeza</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($airConditioners as $airConditioner): ?>
                    <tr>
                        <td><?php echo $airConditioner->getId(); ?></td>
                        <td><?php echo $airConditioner->getCoolingCapacity(); ?> BTUs</td>
                        <td><?php echo $airConditioner->getBrand(); ?></td>
                        <td><?php echo $airConditioner->getManufactureYear; ?></td>
                        <td><?php echo $airConditioner->getInverter() ? "Sim" : "Não"; ?></td>
                        <td><?php echo $airConditioner->getlastCleaningDate(); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Botão de Logout -->
        <form action="logout.php" method="POST">
            <button type="submit" class="btn-logout">Sair</button>
        </form>
    </div>

</body>
</html>
