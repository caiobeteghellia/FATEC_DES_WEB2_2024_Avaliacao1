<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php');
    exit;
}

$arquivo = 'ge.txt';
$conteudo = file_exists($arquivo) ? file_get_contents($arquivo) : 'Nenhuma solicitação encontrada.';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Solicitações GE</title>
</head>
<body>
    <h1>Solicitações GE</h1>
    <pre><?php echo htmlspecialchars($conteudo); ?></pre>
    <a href="index.php">Voltar ao Dashboard</a>
</body>
</html>
