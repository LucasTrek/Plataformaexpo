

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORTEC - Ver Dados</title>

    <link rel="stylesheet" href="../main1.css">
    <link rel="stylesheet" href="main-admin1.css">
    <link rel="stylesheet" href="verDados1.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
</head>
<body>

<header>
<body> <!-- Fundo branco -

     BARRA DE MENU -->
     <nav style="background-color: #09244b;"> 
        <!-- LOGO -->
        <a href="../../Plataformaexpotec/index.php" class="logo">
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
                        echo '<a href="http://localhost/Plataformaexpotec/login/login1.php"><i class="bi bi-box-arrow-in-right"></i></a>'; // Exibe o botão "Login"
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
            <a href="../../index.php" class="logo" style="font-size: 45px;" >Dados dos Usuarios</a>
            <label style="font-size: 40px">Cadastros</label>
            
            <?php

            include('../login/conexao.php');

            $sql = "SELECT * FROM tblogin";
            $resultado = mysqli_query($conexao, $sql);

            echo '<table>
                    <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>Senha</th>
                    </tr>';

            while($reg = mysqli_fetch_array($resultado))
            {
                echo '<tr>
                    <td>'.$reg['id'].'</td>
                    <td>'.$reg['usuario'].'</td>
                    <td>'.$reg['dt_nasc'].'</td>
                    <td>'.$reg['email'].'</td>
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