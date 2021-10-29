
<?php require_once 'core/view.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Paradise Cosmetics</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=constant('URL')?>plugins/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="<?=constant('URL')?>plugins/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?=constant('URL')?>plugins/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?=constant('URL')?>plugins/style.css">
    <script src="<?=constant('URL')?>plugins/js/custom.js"></script>
</head>
<body>
<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <img src="<?=constant('URL')?>plugins/images/logo 1.png" alt="logo">   
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-6 order-3">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Sobre Nosotros</a></li>
                            <li><a href="#">Eventos</a></li>
                            <li><a href="#">Noticias</a></li>
                            <li><a href="<?=constant('URL')?>contact">Contacto</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-2 d-none d-lg-block order-2 order-lg-3">
                    <div style="position: relative;" class="buy-tickets">
                        <a style="float: left; margin: 10px;" class="btn dark-purple" href="<?=constant('URL')?>login">Iniciar Sesion</a>
                        <a style="float: left; position: absolute; margin-top: 10px;" href="<?=constant('URL')?>signup" class="btn dark-purple">Crear Cuenta</a>
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-date="2018/05/01" style="background: url(<?=constant('URL')?>plugins/images/header1.png) no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">

                                    <h2 class="entry-title">1 No te pierdas de ofertas.<br>Registrate!</h2>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <h5 class="entry-title"><br></h2>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            <div class="swiper-slide" data-date="2019/05/01" style="background: url(<?=constant('URL')?>plugins/images/header2.png) no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">

                                    <h2 class="entry-title">2 No te pierdas de eventos. <br>Registrate!</h2>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <h5 class="entry-title"><br></h2>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            <div class="swiper-slide" data-date="2020/05/01" style="background: url(<?=constant('URL')?>plugins/images/header3.png) no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">

                                    <h2 class="entry-title">3 Los mejores productos. <br>Registrate!</h2>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <h5 class="entry-title"><br></h2>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .swiper-container -->
</header><!-- .site-header -->

<div class="homepage-info-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5">
                <figure>
                    <img src="<?=constant('URL')?>plugins/images/logo 1.png" alt="logo">
                </figure>
            </div>

            <div class="col-12 col-md-8 col-lg-7">
                <header class="entry-header">
                    <h2 class="entry-title">¿Qué es Paradise Cosmetics y porque elegir nuestros productos?</h2>
                </header>

                <div class="entry-content">
                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et, scelerisque sit amet metus. Duis vel semper turpis, ac tempus libero. Maecenas id ultrices risus. Aenean nec ornare ipsum, lacinia volutpat urna. Maecenas ut aliquam purus, quis sodales dolor.</p>
                </div>

                <footer class="entry-footer">
                    <a href="#" style="padding-right: 50px; border-color: black; color: black;" class="btn">Leer mas</a>
                    <a href="<?=constant('URL')?>signup" class="btn dark">Regístrate ahora</a>
                </footer>
            </div>
        </div>
    </div>
</div>

<div class="homepage-featured-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 style="color: white; font-size: 100px; text-align: center;" class="entry-title">Productos Populares</h2>
                <br>
                <div class="featured-events-wrap flex flex-wrap justify-content-between">
                    <div class="event-content-wrap positioning-event-1">
                        <figure>
                            <a href="#"><img src="<?=constant('URL')?>plugins/images/P1.jpeg" alt="1" width="364px" height="402px"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Mascarilla carbonatada</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-2">
                        <figure>
                            <a href="#"><img src="<?=constant('URL')?>plugins/images/P2.jpeg" alt="" width="266px" height="298px"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Exfoliante corporal en gel</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-3">
                        <figure>
                            <a href="#"><img src="<?=constant('URL')?>plugins/images/P3.jpeg" alt="" width="260px" height="296px"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Paleta de sombras con espejo</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-4 half">
                        <figure>
                            <a href="#"><img src="<?=constant('URL')?>plugins/images/P10.jpg" alt="" width="164px" height="164px"></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-5 half">
                        <figure>
                            <a href="#"><img src="<?=constant('URL')?>plugins/images/P11.jpg" alt="" width="164px" height="164px"></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-6 half">
                        <figure>
                            <a href="#"><img src="<?=constant('URL')?>plugins/images/P12.jpg" alt="" width="167px" height="119px"></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-7">
                        <figure>
                            <a href="#"><img src="<?=constant('URL')?>plugins/images/P4.jpeg" alt="" width="263px" height="285px"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Serum perlas bioaqua</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-8">
                        <figure>
                            <a href="#"><img src="<?=constant('URL')?>plugins/images/P5.jpeg" alt="1" width="364px" height="402px"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Kit de brochas X9</h3>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-9">
                        <figure>
                            <a href="#"><img src="<?=constant('URL')?>plugins/images/P6.jpeg" alt="" width="263px" height="285px"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Tapete limpia brocha</h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="homepage-next-events">
    <div class="container">
        <div class="row">
            <div class="next-events-section-header">
                <h2 class="entry-title">Programadores</h2>
                <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et, scelerisque sit amet metus. Duis vel semper turpis, ac tempus libero. Maecenas id ultrices risus. Aenean nec ornare ipsum, lacinia.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="<?=constant('URL')?>plugins/images/HF.png" alt="1"></a>
                        <div class="event-rating">1</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Henry Fernando Fonnegra Rodriguez</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                    </header>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="<?=constant('URL')?>plugins/images/PR2.jpeg" alt="1"></a>

                        <div class="event-rating">2</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Ciro José Perrony Parra</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                    </header>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="<?=constant('URL')?>plugins/images/PR3.jpeg" alt="1"></a>

                        <div class="event-rating">3</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Cristian Camilo Perez Ascanio</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                    </header>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="#"><img src="<?=constant('URL')?>plugins/images/JR.png" alt="1"></a>

                        <div class="event-rating">4</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Jerson Gregorio Rodriguez Ramirez</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                        <br>
                        <br>
                        <br>
                    </header>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="<?=constant('URL')?>plugins/images/logo 1.png" alt="logo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Sobre Nosotros</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Noticias</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

<script type='text/javascript' src='<?=constant('URL')?>plugins/js/jquery.js'></script>
<script type='text/javascript' src='<?=constant('URL')?>plugins/js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='<?=constant('URL')?>plugins/js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='<?=constant('URL')?>plugins/js/swiper.min.js'></script>
<script type='text/javascript' src='<?=constant('URL')?>plugins/js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='<?=constant('URL')?>plugins/js/circle-progress.min.js'></script>
<script type='text/javascript' src='<?=constant('URL')?>plugins/js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='<?=constant('URL')?>plugins/js/custom.js'></script>

</body>
</html>