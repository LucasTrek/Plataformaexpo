<?php
	include('session.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-CompatibleS" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>FORTEC - Menu</title>
    <link rel="stylesheet" href="main13.css">
	<link rel="stylesheet" href="telas12.css">
    <link rel="stylesheet" href="first.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
	<header>
        <!-- BARRA DE MENU --> 
        <nav style="background-color: #09244b;"> <!-- Mudança de cor para azul escuro -->
            <!-- LOGO -->
            <a href="../../index.php" style="font-size: 1.5rem;" class="logo">
                FORTEC <!-- Troca do nome para FORTEC -->
            </a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <!-- ITEMS DO MENU -->
            <ul class="nav-list">
                <li><a href="#itemspage" onclick="scrollToSection(event)">Conta</a></li> <!-- Troca do ícone e nome para "Produtos" -->
                <li> 
                    <?php
                        // Verifica se o usuário está logado
                        if(isset($_SESSION['usuario'])) {
                            $nomeUsuario = $_SESSION['usuario'];
                            echo $nomeUsuario . ' &nbsp;&nbsp;&nbsp;<a class="logout" href="encerrar_sessao.php"><i class="bi bi-box-arrow-right"></i></a>';
                        } else {
                            echo '<a href="login/login1.php"><i class="bi bi-box-arrow-in-right"></i></a>';
                        }
                    ?>
                </li>
            </ul>
					</div>
        </nav>
        <script src="../../mobile.js"></script>
    </header>
    
    <!-- SLIDESHOW -->
    <section id="frontpage">
        <!-- Adicione aqui o seu conteúdo do slideshow, mantendo a estrutura existente. -->
    </section>

    <footer class="footer">
        <div class="containerfooter">
          <ul class="footer-text">
           
          </ul>
        </div>
    </footer>
	<h1 class="titulos"></h1>

<div class="section-container"style="background-color: aliceblue;">
	<body>
		<h1 class="Teste Teste1" style="color black;">ENEM 2022</h1>
	<hr class="hr1">
	</div>
	<section class="coluna linha bscf">
		<div class="item enem enema" data-url="https://download.inep.gov.br/enem/provas_e_gabaritos/2022_PV_impresso_D1_CD1.pdf" onclick="redirectToPage(this)">
		<img src="https://www.svgrepo.com/show/431583/document-2.svg" class="img"><hr width="2px" color="black" class="enemhr"><br><h4 class="centro">Prova Enem 2022</h4>
		</div>
		<div class="item enem enema" data-url="https://download.inep.gov.br/enem/provas_e_gabaritos/2022_GB_impresso_D1_CD1.pdf" onclick="redirectToPage(this)">
		<img src="https://www.svgrepo.com/show/431583/document-2.svg" class="img"><hr width="2px" color="black" class="enemhr"><br><h4 class="centro2">Gabarito Enem 2022</h4>
		</div>
	</section>
	
	<div class="section-container"style="background-color: aliceblue;">
	
		<h1 class="Teste">MATERIAIS</h1>
	<hr class="hr1">
	</div>
	<section class="coluna linha bscf">
		<div class="item enem enema" data-url="https://drive.google.com/drive/folders/164uCbeHdV3Iq2vVVRMM3yDNXuvl1ZN92" onclick="redirectToPage(this)">
		<img src="https://www.svgrepo.com/show/432042/video.svg" class="img"><hr width="2px" color="black" class="enemhr"><br><h4 class="centro">Vídeoaulas</h4>
		</div>
		<div class="item enem enema" data-url="https://drive.google.com/drive/folders/164uCbeHdV3Iq2vVVRMM3yDNXuvl1ZN92" onclick="redirectToPage(this)">
		<img src="https://www.svgrepo.com/show/431461/book-2.svg" class="img"><hr width="2px" color="black" class="enemhr"><br><h4 class="centro3">Apostila</h4>
		</div>

	</section>
	<div class="section-container"style="background-color: aliceblue;">
	
		<h1 class="Teste">ATIVIDADES</h1>
	<hr class="hr1">
	</div>
	<section class="coluna linha bscf">
		<div class="item enem enema" data-url="https://edu.google.com/intl/ALL_br/workspace-for-education/classroom/" onclick="redirectToPage(this)">
		<img src="https://www.svgrepo.com/show/431820/news.svg" class="img"><hr width="2px" color="black" class="enemhr"><br><h4 class="centro3">Classroom</h4>
		</div>
		<div class="item enem enema" data-url="memory.php" onclick="redirectToPage(this)">
		<img src="https://www.svgrepo.com/show/431683/game-2.svg" class="img"><hr width="2px" color="black" class="enemhr"><br><h4 class="centro">Jogo Educacional</h4>
		</div>
		<div class="item enem enema" data-url="https://forms.gle/9fXkxAXqHXbdfbfn6" onclick="redirectToPage(this)">
		<img src="https://www.svgrepo.com/show/431602/edit.svg" class="img"><hr width="2px" color="black" class="enemhr"><br><h4 class="centro3">Quiz</h4>
		</div>
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


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuButton = document.querySelector('.mobile-menu');
        const navList = document.querySelector('.nav-list');

        mobileMenuButton.addEventListener('click', function () {
            navList.classList.toggle('active');
            mobileMenuButton.classList.toggle('active');
        });
    });
</script>

</body>
</html>
