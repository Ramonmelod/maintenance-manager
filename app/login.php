<?php
include './getTecnico.php';
include './getAirConditioner.php';

// Variáveis de erro
$erro = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verifica se o nome de usuário corresponde ao nome do técnico e a senha está correta
    if ($usuario === $tecnico1->getName() && $tecnico1->verificarSenha($senha)) {
        // Se as credenciais estiverem corretas, redireciona para o painel
        session_start();
        
        $_SESSION['tecnico'] = $tecnico1->getId();

        header("Location: panel.php");
        exit();
    }else if ($usuario === $tecnico2->getName() && $tecnico2->verificarSenha($senha)) {
        // Se as credenciais estiverem corretas, redireciona para o painel
        session_start();
        
        $_SESSION['tecnico'] = $tecnico2->getId();

        header("Location: panel.php");
        exit();
    } else {
        // Se o nome de usuário ou a senha estiverem incorretos
        $erro = "Usuário ou senha inválidos!";
    }


}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        .login-container button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>

        <!-- Formulário de login -->
        <form method="POST" action="login.php">
            <input type="text" name="usuario" placeholder="Nome de Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

        <!-- Mensagem de erro, se houver -->
        <?php if ($erro): ?>
            <div class="error"><?php echo $erro; ?></div>
        <?php endif; ?>
    </div>

</body>
</html>
