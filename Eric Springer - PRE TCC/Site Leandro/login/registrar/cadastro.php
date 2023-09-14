<?php
    include('../../session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GV - Cadastre-se</title>

    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="registrar.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body style="background-color: #121212;">

    <header>
        <!-- BARRA DE MENU -->
        <nav>
            <!-- LOGO -->
            <a href="../../index.php" class="logo">
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
                <li><a href="../login.php"><i class="bi bi-box-arrow-in-right"></i></a></li>
            </ul>
        </nav>
        <script src="../../mobile.js"></script>
    </header>

    <section>
    
        <div id="login-container">
            <a href="../../index.php" class="logo">Game Vault</a>
            <label for="">Crire uma conta</label>
            <div class="form-container">
                <form method="post" action="registrar.php" required>
                    <input type="text" placeholder="Insira seu nome" name="nome"required><br>
                    <input type="date" placeholder="Insira sua data de nascimento" required name="dt_nasc"><br>
                    <input type="text" placeholder="Insira seu e-mail" name="email" required><br>
                    <input type="password" placeholder="Insira sua senha" name="senha" required><br>
                    <input type="submit" value="Cadastrar">
                </form><br>
                <p>Possui uma conta? <a href="../login.php">Entre agora!</a></p>
            </div>
        </div>

    </section>

</body>
</html>