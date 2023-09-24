<?php
    include('../../session.php');

    if($_SESSION['permissaoUsuario'] != 's'){
        header('Location: ../../index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GV - Inserir Dados</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="main-admin1.css">
    <link rel="stylesheet" href="inserir.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
</head>
<body>

<header>
        <!-- BARRA DE MENU -->
        <nav style="background-color: #09244b;"> <!-- Mudança de cor para azul escuro -->
            <!-- LOGO -->
            <a href="../../index.php" class="logo">
                Fortec
                <!-- <img src="https://cdn.discordapp.com/attachments/1093159478377054360/1101538751269847092/pixel-art-650x350-removebg-preview.png" alt=""> -->
            </a>

            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            

            <!-- ITEMS DO MENU -->
            <ul class="nav-list">
                <li><a href="../verDados.php">Ver dados</a></li>
                <li><a href="inserir.php">Inserir dados</a></li>
                <li><a href="../deletar/deletar.php">Deletar dados</a></li>
                <li><a href="../atualizar/atualizar.php">Atualizar dados</a></li>
                <!-- <li><i class="bi bi-cart4"></i></li> -->
                <li>
                    <?php

                        if(isset($_SESSION['nomeUsuario'])) {
                            $nomeUsuario = $_SESSION['nomeUsuario'];
                            echo '<i class="bi bi-person"></i> &nbsp;&nbsp;' . $nomeUsuario . ' &nbsp;&nbsp;&nbsp;<a class="logout" href="../../encerrar_sessao.php"><i class="bi bi-box-arrow-right"></i></a>'; // Exibe o nome do usuário
                        } else {
                            echo '<a href="login/login.php"><i class="bi bi-box-arrow-in-right"></i></a>'; // Exibe o botão "Login"
                        }
                    ?>
                </li>
            </ul>
        </nav>
        <script src="../../mobile.js"></script>
    </header>

    <section>
        <center>
            
            <div id="container">
                <a href="../../index.php" class="logo">Fortec</a>
                <label>Inserir Dados</label>

                <form method="POST">
                    <input type="text" name="id" placeholder="Insira o ID" required><br>
                    <input type="text" name="usuario" placeholder="Insira o usuario" required><br>
                    <input type="text" name="senha" placeholder="Insira a senha" required><br>
                    <input type="text" name="email" placeholder="Insira o email" required><br>
                    <input type="date" name="dt_nasc" placeholder="Insira a data de nascimento" required><br>

                    <input type="submit">
                </form>
            </div>
            
            <?php
                include('../../login/conexao.php');

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $id = $_POST['id'];
                    $usuario = $_POST['usuario'];
                    $senha = $_POST['senha'];
                    $email = $_POST['email'];
                    $dt_nasc = $_POST['dt_nasc'];

                    if (!empty($id) && !empty($usuario) && !empty($senha) && !empty($email) && !empty($dt_nasc)) {
                        $sql = "INSERT INTO tblogin (id, usuario, senha, email, dt_nasc) VALUES ('$id','$usuario', '$senha', '$email', '$dt_nasc')";
                        $resultado = mysqli_query($conexao, $sql);

                        if ($resultado) {
                            echo "<script>alert('Registro inserido com sucesso'); window.location.href = '../verDados.php';</script>";
                        } else {
                            echo "Ocorreu um erro ao inserir o registro.";
                        }
                    } else {
                        echo "Por favor, preencha todos os campos.";
                    }
                }
            ?>


    </section>
    
</body>
</html>