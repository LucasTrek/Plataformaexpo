<?php
    include('session.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GV - Home</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="first.css">
    <link rel="stylesheet" href="slider.css">

    <script defer src="scrollanimation.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>

    <header>
        <!-- BARRA DE MENU -->
        <nav>

            <!-- LOGO -->
            <a href="" class="" style="font-size: 1.5rem;" class="logo">
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
                <li><a href="#itemspage" onclick="scrollToSection(event)"><i class="bi bi-controller"></i></a></li>
                <li><i class="bi bi-cart4"></i></li>
                <li>
                    <?php

                        if(isset($_SESSION['nomeUsuario'])) {
                            $nomeUsuario = $_SESSION['nomeUsuario'];
                            echo '<i class="bi bi-person"></i> &nbsp;&nbsp;' . $nomeUsuario . ' &nbsp;&nbsp;&nbsp;<a class="logout" href="encerrar_sessao.php"><i class="bi bi-box-arrow-right"></i></a>'; // Exibe o nome do usuário
                        } else {
                            echo '<a href="login/login.php"><i class="bi bi-box-arrow-in-right"></i></a>'; // Exibe o botão "Login"
                        }
                    ?>
                </li>
            </ul>

        </nav>
        <script src="mobile.js"></script>
    </header>

    <!-- SLIDESHOW -->
    <section id="frontpage">
        <!-- https://www.gamestore.pt/ -->

        <!-- Slideshow container -->
            <!-- Div Pai -->
            <div class="slideshow-container">

                <div class="mySlides fade">
                <!-- <div class="numbertext">2 / 6</div> -->
                    <div class="slide-content">
                        <img src="IMG/slider_ZELDA.webp" class="imagemslide">
                        <div class="text">ZELDA TEAR OF THE KINGDOMS</div>
                    </div>
                </div>

                <!-- Imagens de largura total com número e texto de legenda -->
                <div class="mySlides fade">
                    <!-- <div class="numbertext">1 / 6</div> -->
                    <div class="slide-content">
                    <img src="IMG/slider_RE4.webp" class="imagemslide">
                    <div class="text">RESIDENT EVIL 4 - 10% DE DESCONTO</div>
                    </div>
                </div>
            
                <div class="mySlides fade">
                <!-- <div class="numbertext">2 / 6</div> -->
                    <div class="slide-content">
                        <img src="IMG/slider_ER.webp" class="imagemslide">
                        <div class="text">ELDEN RING - 20% DE DESCONTO</div>
                    </div>
                </div>
            
                <div class="mySlides fade">
                    <!-- <div class="numbertext">3 / 6</div> -->
                    <div class="slide-content">
                        <img src="IMG/slider_MULTIMIDIA.webp" class="imagemslide">
                        <div class="text">MIDIA MULTIPLATAFORMAS</div>
                    </div>
                </div>
            
                <!--Botões seguinte e anterior -->
                <a class="prev" onclick="plusSlides(-1)" title="anterior">&#10094;</a>
                <a class="next" onclick="plusSlides(1)" title="próximo">&#10095;</a>
            </div>
            <br>
            
            <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            // Controles seguinte / anterior
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }
            
            // Controles de imagem em miniatura
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length)
                {
                slideIndex = 1;
                }
                if (n < 1)
                {
                slideIndex = slides.length;
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
            }
            </script>
          

    </section>

    <!-- ITEMS A VENDA -->
    <section id="itemspage">

        <div class="title hidden">
            <div class="line0" style="margin-right: 1%;"></div>
            <div class="text-title">
                 NOVIDADES <br>
                <div class="mini">PROMOÇÕES</div>
            </div>
            <div class="line0" style="margin-left: 1%;"></div>
        </div>
        <div id="container-promocao">

            <!-- PRIMEIRO JOGO PROMOÇÃO -->
            <div class="jogo-promo promo-1 hidden" data-delay="300">
                
                <div class="preçopromo">
                    <center>
                        <span class="valor">R$199,99</span>
                        <br>
                        <i class="bi bi-basket2" class="comprar"></i>
                    </center>
                </div>

                <div class="imgpromo"></div>
            </div>

            <!-- SEGUNDO JOGO PROMOÇÃO -->
            <div class="jogo-promo promo-2 hidden" data-delay="100">

                <div class="preçopromo">
                    <center>
                        <span class="valor">R$349,00</span>
                        <br>
                        <i class="bi bi-basket2" class="comprar"></i>
                    </center>
                </div>

                <div class="imgpromo"></div>
            </div>

            <!-- SEGUNDO JOGO PROMOÇÃO -->
            <div class="jogo-promo promo-3 hidden" data-delay="300">

                <div class="preçopromo">
                    <center>
                        <span class="valor">R$225,00</span>
                        <br>
                        <i class="bi bi-basket2" class="comprar"></i>
                    </center>
                </div>

                <div class="imgpromo"></div>
            </div>

        </div>

        <div class="title hidden">
            <div class="line0" style="margin-right: 1%;"></div>
            <div class="text-title">
                 POPULARES <br>
                <div class="mini">DESTAQUES</div>
            </div>
            <div class="line0" style="margin-left: 1%;"></div>
        </div>

        <!-- JOGOS NORMAIS -->
        <div id="container-jogos">
            
            <!-- JOGO 1 -->
            <div class="jogo jogo-1 hidden" data-delay="100">

                <div class="preçojogo">
                    <center>
                        <span class="valor">R$149,99</span>
                        <br>
                        <i class="bi bi-basket2" class="comprar"></i>
                    </center>
                </div>

                <!-- IMAGEM DO JOGO  -->
                <div class="imgjogo"></div>

            </div>

             <!-- JOGO 2 -->
            <div class="jogo jogo-2 hidden" data-delay="300">

                <div class="preçojogo">
                    <center>
                        <span class="valor">R$189,99</span>
                        <br>
                        <i class="bi bi-basket2" class="comprar"></i>
                    </center>
                </div>

                <!-- IMAGEM DO JOGO  -->
                <div class="imgjogo"></div>

            </div>

             <!-- JOGO 3 -->
            <div class="jogo jogo-3 hidden" data-delay="500">

                <div class="preçojogo">
                    <center>
                        <span class="valor">R$249,99</span>
                        <br>
                        <i class="bi bi-basket2" class="comprar"></i>
                    </center>
                </div>

                <!-- IMAGEM DO JOGO  -->
                <div class="imgjogo"></div>

            </div>

             <!-- JOGO 4 -->
            <div class="jogo jogo-4 hidden" data-delay="800">

                <div class="preçojogo">
                    <center>
                        <span class="valor">R$200,00</span>
                        <br>
                        <i class="bi bi-basket2" class="comprar"></i>
                    </center>
                </div>

                <!-- IMAGEM DO JOGO  -->
                <div class="imgjogo"></div>

            </div>

             <!-- JOGO 5 -->
            <div class="jogo jogo-5 hidden" data-delay="1100">

                <div class="preçojogo">
                    <center>
                        <span class="valor">R$330,00</span>
                        <br>
                        <i class="bi bi-basket2" class="comprar"></i>
                    </center>
                </div>

                <!-- IMAGEM DO JOGO  -->
                <div class="imgjogo"></div>

            </div>
        

    </section>

    <footer class="footer">
        <div class="containerfooter">
          <ul class="footer-text">
            © 2023 Game vault. Todos os direitos reservados. <br><br>
            Eric Springer, 215164 <br>
            Sergio Santana, 214165 <br>
            Ricardo Viana, 215312 <br>
            Matheus Barros, 215343 <br>
            Victor Lebar, 215202 <br>
            Gustavo Gonçalves, 215359 <br>
          </ul>
        </div>
      </footer>
      
      
</body>
</html>