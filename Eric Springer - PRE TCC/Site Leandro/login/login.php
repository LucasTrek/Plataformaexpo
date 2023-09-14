<?php
    include('../session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GV - Login</title>

    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="login.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body style="background-color: #121212;">

    <header>
        <!-- BARRA DE MENU -->
        <nav>
            <!-- LOGO -->
            <a href="../index.php" class="logo">
                Game Vault
                <!-- <img src="https://cdn.discordapp.com/attachments/1093159478377054360/1101538751269847092/pixel-art-650x350-removebg-preview.png" alt=""> -->
            </a>

            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            

            <!-- ITEMS DO MENU -->
            <ul class="nav-list">
                <li><i class="bi bi-cart4"></i></li>
                <li><a href="login.php"><i class="bi bi-box-arrow-in-right"></i></a></li>
            </ul>
        </nav>
        <script src="../mobile.js"></script>
    </header>

    <section>
    
        <div id="login-container">
            <a href="" class="logo">Game Vault</a>
            <label for="">Entrar na sua conta</label>
            <div class="form-container">
                <form method="post" action="logar.php">
                    <input type="text" placeholder="Insira seu e-mail" name="email"><br>
                    <input type="password" placeholder="Insira sua senha" name="senha"><br>
                    <input type="submit" value="Entrar">
                </form><br>
                <p>Não possui uma conta? <a href="registrar/cadastro.php">Crie uma agora!</a></p>
            </div>
        </div>

    </section>

</body>
</html>