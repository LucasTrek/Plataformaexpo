<?php
    $conexao=mysqli_connect("localhost","root","","bdexpo");

    if (!$conexao) {
        echo "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
        exit();
    }
?>