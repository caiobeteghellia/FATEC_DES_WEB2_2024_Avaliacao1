<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login_tec.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            background-color: #CECECE;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .page-header {
            background-color: #D20103;
            color: #FFFFFF;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .page-header h1 {
            margin: 0;
            font-size: 24px;
        }
        .btn-primary {
            background-color: #D20103;
            border-color: #D20103;
            border-radius: 4px;
            margin: 10px;
        }
        .btn-primary:hover {
            background-color: #c30002;
            border-color: #c30002;
        }
        .btn-danger {
            background-color: #e03b3d;
            border-color: #e03b3d;
            border-radius: 4px;
        }
        .btn-danger:hover {
            background-color: #d32f2f;
            border-color: #d32f2f;
        }
        .options {
            text-align: center;
        }
        .logout-button {
            display: block;
            margin: 20px auto;
            background-color: #e03b3d;
            border-color: #e03b3d;
        }
        .logout-button:hover {
            background-color: #d32f2f;
            border-color: #d32f2f;
        }
        .container {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b><br>Bem-vindo ao site.</h1>
        </div>
        <div class="options">
            <a href="verificar_solicitacao_curso_tec.php" class="btn btn-primary">Verificar Solicitações por Curso</a>
            <a href="verificar_solicitacao_tec.php" class="btn btn-primary">Verificar Solicitações</a>
        </div>
        <a href="index.php" class="btn btn-danger logout-button">Sair da conta</a>
    </div>
</body>
</html>
