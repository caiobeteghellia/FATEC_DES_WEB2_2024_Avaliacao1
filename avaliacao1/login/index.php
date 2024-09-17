<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitações Laboratoriais</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5F5F5;
            color: #333;
        }
        header {
            background-color: #D20103; 
            color: #fff; 
            padding: 1em 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em; 
        }
        nav {
            background-color: #CECECE;
            padding: 1em;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 1em;
        }
        nav ul li a {
            color: #000000;
            text-decoration: none;
            font-size: 1.2em;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 2em auto;
            padding: 2em;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        footer {
            text-align: center;
            padding: 1em;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer a {
            color: #D20103;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo à Página de Solicitações Laboratoriais</h1>
    </header>
    <nav>
        <ul>
            <li><a href="login_coord.php">Área da Coordenação</a></li>
            <li><a href="login_tec.php">Área dos Técnicos</a></li>
            <li><a href="verificar_solicitacao_dash.php">Verificar Solicitações</a></li>
        </ul>
    </nav>
    <div class="container">
        <p>Use o menu acima para navegar para as áreas desejadas.</p>
    </div>
    <footer>
        <p>© 2024 Solicitações Laboratoriais | <a href="#">Privacidade</a></p>
    </footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
