<?php

session_start();
print_r($_SESSION);
print_r($_POST);
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
print($cpf);
print('br');
print($nome);


?>
 