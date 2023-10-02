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
            $_SESSION['usuario'] = $usuario['usuario'];

            header("Location: index.php");

        } else {
            echo "Falha ao logar! Usuário ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Login - Plataforma</title>
    
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br>E entre na Plataforma</h1>
            <img src="https://www.fatef.com.br/wp-content/uploads/2020/04/LOGO-BRANCA-SEM-FUNDO-MENOR-300x233.png" id="img" class="left-login-image" alt="Logo Fortec">
        </div>
        <div class="right-login">
        <form class="right-login" method="post" action="http://localhost/Plataformaexpotec/login/logar1.php">
            <div class="card-login">
                <h1>LOGIN</h1>
                
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <input type="submit" class="btn-login" value="Login">
                </div>      
            </div>
        </form>
    </div>
</body>
</html>