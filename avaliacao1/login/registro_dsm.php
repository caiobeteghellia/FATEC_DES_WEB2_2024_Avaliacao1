<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php');
    exit;
}

$arquivo = 'dsm.txt';
$conteudo = file_exists($arquivo) ? file_get_contents($arquivo) : 'Nenhuma solicitação encontrada.';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Solicitações DSM</title>
</head>
<body>
    <h1>Solicitações DSM</h1>
    <pre><?php echo htmlspecialchars($conteudo); ?></pre>
    <a href="index.php">Voltar ao Dashboard</a>
</body>
</html>
