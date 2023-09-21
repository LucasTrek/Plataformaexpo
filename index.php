<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Estudos - FORTEC</title>
    <link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h1 class="titulos">Teste</h1>

    <div class="section-container">
        <div class="Teste">
            <h1>Olá mundo!</h1>
        </div>
        <section class="coluna linha bscf">
            <div class="item" id="item1" data-url="Login.html" onclick="redirectToPage(this)">1</div>
            <div class="item">2</div>
            <div class="item">3</div>
        </section>
        <div class="Teste">
            <h1>Olá mundo!</h1>
        </div>
        <section class="coluna linha bscf">
            <div class="item">1</div>
            <div class="item">2</div>
            <div class="item">3</div>
        </section>
        <div class="Teste">
            <h1>Olá mundo!</h1>
        </div>
        <section class="coluna linha bscf">
            <div class="item">1</div>
            <div class="item">2</div>
            <div class="item">3</div>
        </section>
    </div>  
    

    <script>
        // Função para redirecionar o usuário com base no atributo "data-url"
        function redirectToPage(element) {
            var url = element.getAttribute('data-url');
            if (url) {
                window.location.href = url;
            }
        }
    </script>
</body>
</html>