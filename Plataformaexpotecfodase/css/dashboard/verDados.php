

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORTEC - Ver Dados</title>

    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="main-admin.css">
    <link rel="stylesheet" href="verDados.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
</head>
<body>

<header>
<body style="background-color: #F8F8FF;"> <!-- Fundo branco -

     BARRA DE MENU -->
    <nav>
    <nav style="background-color: #1E90FF;"> <!-- Mudança de cor para azul escuro -->
        <!-- LOGO -->
        <a href="../index.php" class="logo">
            FORTEC
        </a>

        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        
        <!-- ITEMS DO MENU -->
        <ul class="nav-list">
            <li><a href="verDados.php">Ver Dados</a></li>
            <li><a href="inserir/inserir.php">Inserir Dados</a></li>
            <li><a href="deletar/deletar.php">Deletar Dados</a></li>
            <li><a href="atualizar/atualizar.php">Atualizar Dados</a></li>
            <li>
                <?php

                    if(isset($_SESSION['nomeUsuario'])) {
                        $nomeUsuario = $_SESSION['nomeUsuario'];
                        echo '<i class="bi bi-person"></i> &nbsp;&nbsp;' . $nomeUsuario . ' &nbsp;&nbsp;&nbsp;<a class="logout" href="../encerrar_sessao.php"><i class="bi bi-box-arrow-right"></i></a>'; // Exibe o nome do usuário
                    } else {
                        echo '<a href="../login/login.php"><i class="bi bi-box-arrow-in-right"></i></a>'; // Exibe o botão "Login"
                    }
                ?>
            </li>
        </ul>
    </nav>
    <script src="../mobile.js"></script>
</header>

<section>
    <center>
        <div id="container">
            <a href="../../index.php" class="logo">FORTEC</a>
            <label>Ver Dados</label>
            
            <?php

            include('../login/conexao.php');

            $sql = "SELECT * FROM cadastro";
            $resultado = mysqli_query($conexao, $sql);

            echo '<table>
                    <tr>
                        <th>Usuario</th>
                        <th>Senha</th>
                    </tr>';

            while($reg = mysqli_fetch_array($resultado))
            {
                echo '<tr>
                        <td>'.$reg['usuario'].'</td>
                        <td>'.$reg['senha'].'</td>
                    </tr>';
            }

            echo '</table>';
            mysqli_close($conexao);
            ?>
        </div>
    </center>
</section>
    
</body>
</html>