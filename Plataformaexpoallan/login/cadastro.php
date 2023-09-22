<?php
$mensagem = ""; // Inicialize a variável de mensagem vazia

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    // Conectar ao banco de dados (certifique-se de configurar as credenciais corretamente)
    $conexao = mysqli_connect("localhost", "root", "", "bdcadastro");
    
    if (!$conexao) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $verificar_usuario = "SELECT * FROM cadastro WHERE usuario = '$usuario'";
    $result = mysqli_query($conexao, $verificar_usuario);
    
    if (mysqli_num_rows($result) > 0) {
        // Nome de usuário já existe, exiba uma mensagem de erro
        $mensagem = "Nome de usuário já em uso. Escolha outro nome de usuário.";
    } else {

    $sql = "INSERT INTO cadastro (usuario, senha) VALUES ('$usuario', '$senha')";
    
    if (mysqli_query($conexao, $sql)) {
        $mensagem = "Cadastro realizado com sucesso!";
        echo "<script>alert('Cadastrado realizado com sucesso');</script>";

         //Redirecionar para login.php após 2 segundos (ou outro valor desejado)
            header("refresh:0;url=login.php");

    } else {
        $mensagem = "Erro ao cadastrar: " . mysqli_error($conexao);
    }
    
    mysqli_close($conexao);
    }
 }