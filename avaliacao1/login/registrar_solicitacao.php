<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {

    header("location: login_coord.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['laboratorio']) && isset($_POST['data_limite']) && isset($_POST['demanda']) && isset($_POST['curso'])) {
        $laboratorio = htmlspecialchars($_POST['laboratorio']);
        $data_limite = htmlspecialchars($_POST['data_limite']);
        $demanda = htmlspecialchars($_POST['demanda']);
        $curso = htmlspecialchars($_POST['curso']);

        $file = ($curso === 'GE') ? 'ge.txt' : 'dsm.txt';

        $record = "$laboratorio | $data_limite | $demanda\n";


        file_put_contents($file, $record, FILE_APPEND);

        echo "<div class='alert alert-success'>Registro cadastrado com sucesso!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Demanda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        body {
            font: 14px sans-serif;
            background-color: #F5F5F5; 
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #FFFFFF; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #D20103; 
            border-color: #D20103;
        }
        .btn-primary:hover {
            background-color: #b70001; 
            border-color: #b70001;
        }
        .form-group label {
            font-weight: bold;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastrar Demanda</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="laboratorio">Laboratório:</label>
                <select name="laboratorio" class="form-control" required>
                    <option value="Laboratorio1">Laboratório 1</option>
                    <option value="Laboratorio2">Laboratório 2</option>
                    <option value="Laboratorio3">Laboratório 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="data_limite">Data Limite:</label>
                <input type="date" name="data_limite" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="demanda">Demanda:</label>
                <textarea name="demanda" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="curso">Curso Atendido:</label>
                <select name="curso" class="form-control" required>
                    <option value="GE">GE</option>
                    <option value="DSM">DSM</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
            <a href="tela_coord.php" class="btn btn-danger logout-button">Voltar</a>
        </form>
    </div>
</body>
</html>
