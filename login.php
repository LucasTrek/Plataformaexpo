<?php
include('conexao.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])) {

    if(strlen($_POST['usuario']) == 0) {
        echo "<script>alert('Insira seu usuário');</script>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<script>alert('Preencha sua senha');</script>";
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: /Plataformaexpo/index.php");

        } else {
            echo "Falha ao logar! Usuário ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Plataforma de Estudos - FORTEC</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <style>
        


    </style>
    <p class="demo"></p>
    <div class="card">
        
        <div class="card-top">
            <h1>Login</h1><br>
            <h4>Insira seus dados para entrar.</h4>
        </div>
        <form method="post" action="">
            <div class="card-group">
                <label>Usuário:</label><input type="text" name="usuario" placeholder="Usuário"/><br>
            </div>
            <div class="card-group">
                <label>Senha:</label><input type="password" name="senha" placeholder="Senha"/>
            </div>
            <div class="card-group btn">
                <input type="submit" value="Entrar">
            </div>
        </form>
    
    </div>
</body>
</html>