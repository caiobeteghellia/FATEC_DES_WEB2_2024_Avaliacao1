<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == 'coordenacao' && $_POST['password'] == 'coordenacao') {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = 'Coordenacao';
            header("Location: tela_coord.php");
            exit(); 
        } else {
            $_SESSION['loggedin'] = FALSE;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Login Coordenação</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            background-color: #CECECE;
            color: #333;
        }
        .wrapper {
            width: 350px;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
        }
        .wrapper h2 {
            color: #D20103;
            margin-bottom: 20px;
        }
        .form-group label {
            color: #333;
        }
        .form-control {
            border-color: #D20103;
            border-radius: 4px;
        }
        .form-control:focus {
            border-color: #D20103;
            box-shadow: 0 0 0 0.2rem rgba(210, 1, 3, 0.25);
        }
        .btn-primary {
            background-color: #D20103;
            border-color: #D20103;
        }
        .btn-primary:hover {
            background-color: #b70001;
            border-color: #b70001;
        }
        .help-block {
            color: #D20103;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login Coordenação</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
                <a href="logout.php" class="btn btn-danger logout-button">Voltar</a>
            </div>
        </form>
    </div>    
</body>
</html>
