<?php
include('conexao.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])) 

    if(strlen($_POST['usuario']) == 0) {
        echo "<script>alert('Insira seu usuário');</script>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<script>alert('Preencha sua senha');</script>";
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
    }
        ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Plataforma de Estudos - FORTEC</title>
    <link rel="stylesheet" href="../mains.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <style>
        body {
            background-color: #1e90ff; /* Azul */
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            position: absolute;
            top: 300px;
            height: 355px;
            width: 400px;
            padding: 40px;
            text-align: left;
            background-color: aliceblue;
            border-radius: 20px;
            box-shadow: 10px 10px #3251f9;
        }

        .card-top {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .mensagem-sucesso {
            color: green;
            font-weight: bold;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .senha-container {
            position: relative; /* Adicionado para posicionar o ícone do olho */
        }

        .nav-lista {
            position: fixed;
            top: 0;
        }

        .nav-item {
            display: inline;
            margin: auto;
        }

        #img {
            position: absolute;
            top: 50px;
        }

        /* Estilos para o ícone de mostrar/ocultar senha */
        .mostrar-senha {
            cursor: pointer;
            font-size: 1.5em;
            position: absolute; /* Posicionamento absoluto */
            top: 50%; /* Centralizado verticalmente */
            left: -34px; /* Distância à esquerda do campo de senha */
            transform: translateY(-50%); /* Centralizado verticalmente */
        }

        .btn-login{
        background-color: #007BFF; /* Cor de fundo azul */
        color: #fff; /* Cor do texto branco */
        border: solid;
        position: absolute;
            top: 340px;
            height: vh; 
            width: 400px;
            padding: 30px;
        border-radius: 20px;
        font-size: 19px; /* Aumentar o tamanho da fonte */
        line-height: 0; /* Para manter o texto verticalmente centralizado */
        transition: background-color 0.3s; /* Efeito de transição de cor de fundo */
        }
        
        .btn-login:hover {
        background-color: #0056b3; /* Cor de fundo azul mais escura ao passar o mouse */
        }

    </style>

    <script>
        function toggleSenha() {
            var senhaInput = document.getElementById('senha');
            var mostrarSenhaIcon = document.getElementById('mostrar-senha');

            if (senhaInput.type === 'password') {
                senhaInput.type = 'text';
                mostrarSenhaIcon.textContent = '👁️';
            } else {
                senhaInput.type = 'password';
                mostrarSenhaIcon.textContent = '🧿';
            }
        }
    </script>
</head>
<body>
    <img src="https://www.fatef.com.br/wp-content/uploads/2020/04/LOGO-BRANCA-SEM-FUNDO-MENOR-300x233.png" id="img">
    <div class="card">
        <div class="card-top">
            <center>
            <h1>Login</h1><br>
    </center>
            <h4>Insira os dados de usuário.</h4>
        </div>

        <form action="http://localhost/Plataformaexpotec/login/logar1.php" method="post">
            <div class="card-group">
                <label>Usuário:</label><input type="text" class="user" placeholder="Usuário" name="usuario"/><br>
            </div>
            <div class="card-group senha-container"> <!-- Container para posicionar o ícone -->
                <label>Senha:</label>
                <input type="password" class="user" placeholder="Senha" name="senha" id="senha">
                <span id="mostrar-senha" class="mostrar-senha" onclick="toggleSenha()">👁️</span>
            </div>
            <div class="card-group btn">
                <input type="submit" value="Entrar" class="btn-login">
            </div>
        </form>

        <!-- Link para criar uma conta remova o "->" -->
        <!-- <p>Não possui uma conta? <a href="http://localhost/Plataformaexpo/login/cadastro1.php">Crie uma agora!</a></p>-->

    </div>
</body>
</html>