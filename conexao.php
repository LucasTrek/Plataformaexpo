<?php

$usuario = 'id21294610_expouser';
$senha = 'Senha$Teste123';
$database = 'id21294610_login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>