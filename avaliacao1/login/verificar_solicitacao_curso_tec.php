<?php
session_start();

$registros = '';

if (isset($_GET['curso'])) {
    $curso = $_GET['curso'];
    $arquivo = $curso === 'GE' ? 'ge.txt' : ($curso === 'DSM' ? 'dsm.txt' : '');

    if ($arquivo && file_exists($arquivo)) {
        $registros = file_get_contents($arquivo);
    } else {
        $registros = 'Nenhuma solicitação encontrada.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        .form-group label {
            font-weight: bold;
        }
        select, input[type="submit"] {
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            background-color: #D20103;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #b70001;
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
        <h1>Verificar Registros por Curso</h1>
        
        <form method="get">
            <div class="form-group">
                <label for="curso">Escolha o curso:</label>
                <select name="curso" id="curso" class="form-control">
                    <option value="">Selecione um curso</option>
                    <option value="GE">Gestão Empresarial (GE)</option>
                    <option value="DSM">Desenvolvimento em Software Multiplataforma (DSM)</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Visualizar Solicitações">
        </form>
        
        <?php if ($registros): ?>
            <h2>Registros</h2>
            <pre><?php echo htmlspecialchars($registros); ?></pre>
        <?php endif; ?>

        <a href="tela_tec.php" class="btn-logout">Voltar</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
