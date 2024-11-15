<?php
include './getTechnician.php';
include_once './getAirConditioner.php';



session_start();
$erro = "";

session_destroy();



if(isset($_GET["error"])){ // receive the error variable from the url query  
    $erro = $_GET["error"];
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') { // this condition makes the access control
    $usuario = $_POST['usuario']; //receives the values from the form in the html body
    $senha = $_POST['senha'];
    

    for ($i=0; $i<count($technicians);$i++){ //this for runs for all the technicians and the if tests the credentials

        if ($usuario === $technicians[$i]->getEmail() && $technicians[$i]->checkPassword($senha)) {
            //session_start();
            $_SESSION['technician'] = $technicians[$i]->getId();

      } 
    }



   for ($i=0; $i<count($clients);$i++){
   
        if($usuario === $clients[$i]->getEmail() && $clients[$i]->checkPassword($senha)){
            //session_start();
            $_SESSION['client'] = $clients[$i]->getId();
      }
    }

     if(isset($_SESSION['technician'])){
            header("Location: technicianPanel.php");
            exit();
    } else if(isset($_SESSION['client'])){
            header("Location: clientsPanel.php");
            exit();
    }  
       else {
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

        <!-- Login Former-->
        <form method="POST" action="login.php">
            <input type="text" name="usuario" placeholder="Nome de Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

        <!-- Error message, when there is one -->
        <?php if ($erro): ?>
            <div class="error"><?php echo $erro; ?></div>
        <?php endif; ?>
    </div>

</body>
</html>
