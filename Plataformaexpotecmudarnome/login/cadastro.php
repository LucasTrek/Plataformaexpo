<?php
$mensagem = ""; // Inicialize a variável de mensagem vazia

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados (certifique-se de configurar as credenciais corretamente)
    $conexao = mysqli_connect("localhost", "root", "", "bdcadastro");
    
    if (!$conexao) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $sql = "INSERT INTO cadastro (usuario, senha) VALUES ('$usuario', '$senha')";
    
    if (mysqli_query($conexao, $sql)) {
        $mensagem = "Cadastro realizado com sucesso!";
    } else {
        $mensagem = "Erro ao cadastrar: " . mysqli_error($conexao);
    }
    
    mysqli_close($conexao);
}