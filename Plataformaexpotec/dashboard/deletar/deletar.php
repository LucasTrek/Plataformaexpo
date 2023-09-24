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

    <title>Deletar Dados</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="main-admin1.css">
    <link rel="stylesheet" href="deletar.css">
    
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
                <li><a href="../inserir/inserir.php">Inserir dados</a></li>
                <li><a href="deletar.php">Deletar dados</a></li>
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
                <label>Deletar usuarios</label>

                <form method="POST" class="form-container">
                    <input type="number" name="id" placeholder="Insira o ID"><br>
                    <input type="submit">
                </form>

                <?php

                    include('../../login/conexao.php');

                    if (isset($_POST['id'])) {

                        $id = $_POST['id'];
                        $sql = 'DELETE FROM tblogin WHERE id = ' . $id;
                        $resultado = mysqli_query($conexao, $sql);

                        if ($resultado) {

                            echo "<script>alert('Deletado com sucesso'); window.location.href = '../verDados.php';</script>";

                        } else {
                            echo "Ocorreu um erro ao excluir o registro.";
                        }
                    }
                ?>

            </div>

    </section>
    
</body>
</html>