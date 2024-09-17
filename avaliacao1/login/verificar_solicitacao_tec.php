<?php
session_start();

$registrosGE = '';
$registrosDSM = '';

$arquivoGE = 'ge.txt';
$arquivoDSM = 'dsm.txt';

if (file_exists($arquivoGE)) {
    $registrosGE = file_get_contents($arquivoGE);
} else {
    $registrosGE = 'Nenhuma solicitação encontrada para o curso Gestão Empresarial.';
}

if (file_exists($arquivoDSM)) {
    $registrosDSM = file_get_contents($arquivoDSM);
} else {
    $registrosDSM = 'Nenhuma solicitação encontrada para o curso Desenvolvimento em Software Multiplataforma.';
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Registros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F5F5F5; 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 20px auto;
            background-color: #FFFFFF; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #D20103;
            text-align: center;
        }
        .btn-primary {
            background-color: #D20103;
            border-color: #D20103;
        }
        .btn-primary:hover {
            background-color: #b70001;
            border-color: #b70001;
        }
        .alert {
            margin-top: 20px;
        }
        pre {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 4px;
            white-space: pre-wrap;
        }
        a.btn-logout {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
            color: #D20103;
            text-decoration: none;
            border: 1px solid #D20103;
            padding: 10px;
            border-radius: 4px;
        }
        a.btn-logout:hover {
            background-color: #D20103;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Visualizar Registros</h1>
        
        <h2>Gestão Empresarial (GE)</h2>
        <pre><?php echo htmlspecialchars($registrosGE); ?></pre>
        
        <h2>Desenvolvimento em Software Multiplataforma (DSM)</h2>
        <pre><?php echo htmlspecialchars($registrosDSM); ?></pre>

        <a href="tela_coord.php" class="btn-logout">Voltar</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
