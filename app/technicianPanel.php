<?php
// Incluindo as classes e objetos necessários
include './getClient.php';
include './getTechnician.php';

session_start();

// Verificando se o técnico está logado
if (!isset($_SESSION['technician'])) {
    header("Location: login.php");
    exit();
}

// Obtendo o ID do técnico logado
$loggedTechnicianId = $_SESSION['technician'];

// Associando técnicos aos seus clientes
$technicianClientsMap = [
    $technician1->getId() => [$client1, $client2],
    $technician2->getId() => [$client3, $client4, $client5]
];

// Obtendo os clientes do técnico logado
$clients = $technicianClientsMap[$loggedTechnicianId] ?? [];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes do Técnico</title>
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
        <h2>Clientes do Técnico</h2>
        <?php if (!empty($clients)): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Aparelhos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client): ?>
                        <tr>
                            <td><?php echo $client->getId(); ?></td>
                            <td><?php echo $client->getNome(); ?></td>
                            <td>
                                <ul>
                                    <?php foreach ($client->getAirConditioner() as $airConditioner): ?>
                                        <li><?php echo $airConditioner->showInformations(); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum cliente atribuído a este técnico.</p>
        <?php endif; ?>

        <!-- Botão de Logout -->
        <form action="login.php" method="GET">
            <button type="submit" class="btn-logout">Sair</button> <!-- need to remove the session-->
        </form>
    </div>

</body>
</html>
