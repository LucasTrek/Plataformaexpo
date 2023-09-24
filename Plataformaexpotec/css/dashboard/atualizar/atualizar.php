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

    <title>GV - Atualizar Dados</title>

    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="atualizar.css">
    <link rel="stylesheet" href="../main-admin.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
</head>
<body>

<header>
        <!-- BARRA DE MENU -->
        <nav>
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
                <li><a href="../deletar/deletar.php">Deletar dados</a></li>
                <li><a href="atualizar.php">Atualizar dados</a></li>
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
                <label>Alterar usuarios</label>

                <form name="dados" method="post" action="">
                    <input type="text" placeholder="Insira o usuario para alteração" name="usuario"><br>
                    <input type="submit" name="btnpesquisar" value="Pesquisa" class="button">
                </form>

                <?php
                    include("../../login/conexao.php");
                    if(isset($_POST['usuario']))
                    {
                        $usuario = $_POST['usuario'];
                        $sql = "select * from cadastro where usuario = ".$usuario;
                        $result = mysqli_query($conexao,$sql);
                        while($reg=mysqli_fetch_array($result))
                        {
                            echo "<form method='post'>";
                            echo "<input type='text' placeholder='Usuario' name='usuario' value='$reg[usuario]' style='width: 0; height: 0; opacity: 0'><br>";
                            echo "<input type='text' placeholder='Senha' name='senha' value='$reg[senha]'><br>";
                            echo '<input type="submit" name="btnalterar" value="alterar">';
                            echo '</form';

                        }
                    }
                ?>

                <?php
                    include ("../../login/conexao.php");
                    if(isset($_POST['btnalterar']))
                        {
                            $usuario = $_POST['usuario'];
                            $senha = $_POST['senha'];

                            // Atualiza os dados na tabela tblogin
                            $sql = "UPDATE cadastro SET usuario='$usuario', senha='$senha' WHERE usuario=".$usuario;
                            $result = mysqli_query($conexao, $sql);

                            if($result)
                            {
                                echo "<br><font size=4 color='green' face='verdana'>Dados alterados com sucesso</font><br><br>";
                            }
                            else
                            {
                                echo "<br><font size=4 color='red' face='verdana'>Erro ao alterar os dados</font><br><br>";
                            }
                        }

                ?>
            </div>

    </section>
    
</body>
</html>