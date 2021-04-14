<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to homeify logged in page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/homeify-121x113.png" type="image/x-icon">
        <meta name="description" content="">
        <title>Homeify</title>
        <link rel="stylesheet" href="assets/font-awesome-regular/../css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/font-awesome-regular/css/regular.min.css">
        <link rel="stylesheet" href="assets/font-awesome-solid/../css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/font-awesome-solid/css/solid.min.css">
        <link rel="stylesheet" href="assets/material-design/css/material-icons.min.css">
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    </head>
    <body>
        <section class="menu cid-s48OLK6784" once="menu" id="menu1-h">
            <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
                <div class="container">
                    <div class="navbar-brand">
                        <span class="navbar-logo"> <a href="index_in.php"> <img src="assets/images/homeify-121x113.png" alt="" style="height: 3.8rem;"> </a> </span>
                        <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="index_in.php">Homeify</a></span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                            <li class="nav-item dropdown">
                                <a class="nav-link link text-black text-primary dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="true"><span class="material material-home mbr-iconfont mbr-iconfont-btn"></span>HOME</a>
                                <div class="dropdown-menu">
                                    <a class="text-black text-primary dropdown-item display-4" href="artistas.php">ARTISTAS<br></a>
                                    <a class="text-black text-primary dropdown-item display-4" href="fas.php" aria-expanded="false">FÃS</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link text-black text-primary display-4" href="agenda.php"><span class="far fa-fw fa-calendar mbr-iconfont mbr-iconfont-btn"></span>AGENDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link text-black text-primary display-4" href="quem_somos_in.php" aria-expanded="false"><span class="material material-people mbr-iconfont mbr-iconfont-btn"></span>QUEM SOMOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link text-black text-primary display-4" href="perfil.php" aria-expanded="false"><span class="fas fa-fw fa-door-open mbr-iconfont mbr-iconfont-btn"></span>PERFIL</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <section class="header1 cid-s48MCQYojq mbr-fullscreen mbr-parallax-background" id="header1-f">
            <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);"></div>
            <div class="align-center container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>E SE TE DESSEMOS MÚSICA EM CASA?</strong></h1>
                        <p class="mbr-text mbr-fonts-style display-7">Na Homeify criámos um espaço para ti e para a música que gostas. Os melhores concertos não têm de ser nas grandes salas - connosco, podes ter a experiência toda a partir do sofá da tua casa.</p>
                        <div class="mbr-section-btn mt-3">
                            <a class="btn btn-secondary display-4" href="artistas.php">ARTISTAS</a> 
                            <a class="btn btn-secondary display-4" href="fas.php">FÃS</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content1 cid-s48udlf8KU" id="content1-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-12 col-md-9">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Música acima de tudo</strong></h3>
                        <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7">Somos uma equipa de programadores e músicos com um interesse comum - dar voz aos músicos e fãs que não querem desligar a música só por terem de estar fechados em casa. Queres ver concertos? Nós temos a aplicação. Queres dar concertos? Nós temos o estúdio. Não queres fazer o concerto no estúdio? Nós temos equipamento de sobra.&nbsp;</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="video2 cid-spVKUlVN9l" id="video2-n">
            <div class="container">
                <div class="mbr-section-head">
                    <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2"> <strong>Como é que funciona?</strong> </h4>
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-0 mt-2 display-7"></h5>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-12 col-md-10 video-block">
                        <div class="video-wrapper">
                            <iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/hgJjClZM1Wg?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p class="mbr-text pt-2 mbr-fonts-style display-4"></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="content1 cid-s48vaXqeL6" id="content1-b">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-12 col-md-9">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Vantagens para músicos</strong></h3>
                        <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7">qual é, meu?</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="content1 cid-s48vnjULo4" id="content1-c">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-12 col-md-9">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Vantagens para Fãs</strong></h3>
                        <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7">Bla bla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla bla</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery5 mbr-gallery cid-spWecoxawu" id="gallery5-18">
            <div class="container">
                <div class="mbr-section-head">
                    <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong>Os nossos parceiros</strong></h3>
                    <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5"></h4>
                </div>
                <div class="row mbr-gallery mt-4">
                    <div class="col-12 col-md-6 col-lg-3 item gallery-image active">
                        <div class="item-wrapper" data-toggle="modal" data-target="#sqdDcGixgE-modal">
                            <a href="https://cesem.fcsh.unl.pt/en/home/"><img class="w-100" src="assets/images/cesem-1-506x240.png" alt="" data-slide-to="0" data-target="#lb-sqdDcGixgE"></a>
                            <div class="icon-wrapper">
                                <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                            </div>
                        </div>
                        <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7"></h6>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                        <div class="item-wrapper" data-toggle="modal" data-target="#sqdDcGixgE-modal">
                            <a href="https://www.spautores.pt/"><img class="w-100" src="assets/images/maxresdefault-1280x720.jpg" alt="" data-slide-to="1" data-target="#lb-sqdDcGixgE"></a>
                            <div class="icon-wrapper">
                                <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                            </div>
                        </div>
                        <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7"></h6>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                        <div class="item-wrapper" data-toggle="modal" data-target="#sqdDcGixgE-modal">
                            <a href="https://gulbenkian.pt/musica/en/"><img class="w-100" src="assets/images/logo-fundacao-pt-506x136.png" alt="" data-slide-to="2" data-target="#lb-sqdDcGixgE"></a>
                            <div class="icon-wrapper">
                                <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                            </div>
                        </div>
                        <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7"></h6>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                        <div class="item-wrapper" data-toggle="modal" data-target="#sqdDcGixgE-modal">
                            <a href="https://blitz.pt/"><img class="w-100" src="assets/images/logo-hq-wide-506x266.png" alt="" data-slide-to="3" data-target="#lb-sqdDcGixgE"></a>
                            <div class="icon-wrapper">
                                <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                            </div>
                        </div>
                        <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7"></h6>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                        <div class="item-wrapper" data-toggle="modal" data-target="#sqdDcGixgE-modal">
                            <a href="http://amusicaportuguesaagostardelapropria.org/"><img class="w-100" src="assets/images/musica-460x457.jpg" alt="" data-slide-to="4" data-target="#lb-sqdDcGixgE"></a>
                            <div class="icon-wrapper">
                                <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                            </div>
                        </div>
                        <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7"></h6>
                    </div>
                </div>
                <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="sqdDcGixgE-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="carousel slide" id="lb-sqdDcGixgE" data-interval="5000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="assets/images/cesem-1-506x240.png" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/images/maxresdefault-1280x720.jpg" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/images/logo-fundacao-pt-506x136.png" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/images/logo-hq-wide-506x266.png" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/images/musica-460x457.jpg" alt="">
                                        </div>
                                    </div>
                                    <ol class="carousel-indicators">
                                        <li data-slide-to="0" class="active" data-target="#lb-sqdDcGixgE"></li>
                                        <li data-slide-to="1" data-target="#lb-sqdDcGixgE"></li>
                                        <li data-slide-to="2" data-target="#lb-sqdDcGixgE"></li>
                                        <li data-slide-to="3" data-target="#lb-sqdDcGixgE"></li>
                                        <li data-slide-to="4" data-target="#lb-sqdDcGixgE"></li>
                                    </ol>
                                    <a role="button" href="" class="close" data-dismiss="modal" aria-label="Close"> </a>
                                    <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" href="#lb-sqdDcGixgE"> <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next carousel-control" role="button" data-slide="next" href="#lb-sqdDcGixgE"> <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="top-1" hidden>
            <a href="https://mobirise.site"></a>
        </section>
        <section class="footer1 cid-spVNvGeVDB" once="footers" id="footer1-y">
            <div class="container">
                <div class="row mbr-white">
                    <div class="col-12 col-md-6 col-lg-3">
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"> <strong>Ajuda</strong> </h5>
                        <ul class="list mbr-fonts-style display-4">
                            <li class="mbr-text item-wrap">
                                <span style="font-size: 1.1rem;">Contactos</span>
                            </li>
                            <li class="mbr-text item-wrap">
                                <span style="font-size: 1.1rem;">FAQs</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Equipamento</strong></h5>
                        <ul class="list mbr-fonts-style display-4">
                            <li class="mbr-text item-wrap">
                                <span style="font-size: 1.1rem;">Galeria</span>
                            </li>
                            <li class="mbr-text item-wrap">
                                <span style="font-size: 1.1rem;">Preçário<br></span>
                                <br>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Agendamento</strong></h5>
                        <ul class="list mbr-fonts-style display-4">
                            <li class="mbr-text item-wrap">Estúdio</li>
                            <li class="mbr-text item-wrap">Aluguer de Equipamento</li>
                            <li class="item-wrap mbr-text" href="https://homeify.azurewebsites.net/termos.html">
                                <a href="https://homeify.azurewebsites.net/termos.html" class="text-white">Termos de Utilização</a>
                            </li>
                            <li class="mbr-text item-wrap">
                                <br>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"></h5>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4"></p>
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7"> <strong>Social</strong> </h5>
                        <div class="social-row display-7">
                            <div class="soc-item">
                                <a href="http://facebook.com" target="_blank"> <span class="mbr-iconfont socicon-facebook socicon"></span> </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://twitter.com" target="_blank"> <span class="mbr-iconfont socicon-twitter socicon"></span> </a>
                            </div>
                            <div class="soc-item">
                                <a href="http://instagram.com" target="_blank"> <span class="mbr-iconfont socicon-instagram socicon"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/parallax/jarallax.min.js"></script>
        <script src="assets/playervimeo/vimeo_player.js"></script>
        <script src="assets/dropdown/js/nav-dropdown.js"></script>
        <script src="assets/dropdown/js/navbar-dropdown.js"></script>
        <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="assets/theme/js/script.js"></script>
    </body>
</html>