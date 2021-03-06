<?php require_once 'core/view.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Actualizar Datos</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=constant('URL')?>plugins/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="<?=constant('URL')?>plugins/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?=constant('URL')?>plugins/css/swiper.min.css">

    <!--===============================================================================================-->	
	    <!--<link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?=constant('URL')?>plugins/css/main.css">
    <!--===============================================================================================-->
    
    <!-- Styles -->
    <link rel="stylesheet" href="<?=constant('URL')?>plugins/style.css">
</head>
<body class="contact-page">
<header class="site-header">

    <div class="page-header contact-page-header2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Actualizar Datos</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<div class="container">
    
    <div class="container-login100">
            <form class="login100-form validate-form" action="<?=constant('URL')?>user/updateInfo" method="POST" id="register">
                    <div class="site-title" style="margin-left: auto; margin-right: auto;">
                        <a href="<?=constant('URL')?>dashboard/getProducts?page=1"><img src="<?=constant('URL')?>plugins/images/logo 1.png" alt="logo" width="200px" style="align-items: center; top: 0px;"></a>      
                    </div><!-- .site-title -->
                    <br>
                    <br>
                    <br>

                <div class="wrap-input100 validate-input" data-validate="Nombres requeridos">
                    <span class="label-input100">Nombres</span>
                    <input class="input100" type="text" name="fname" id="fname" placeholder="Nombres..." value="<?php echo $this->data['current_user'][':first_name'];?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Apellidos requeridos">
                    <span class="label-input100">Apellidos</span>
                    <input class="input100" type="text" name="lname" id="lname" placeholder="Apellidos..." value="<?php echo $this->data['current_user'][':last_name'];?>">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Apellidos requeridos">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="username" id="username" placeholder="Username..." value="<?php echo $this->data['current_user'][':username'];?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Correo Electronico requerido">
                    <span class="label-input100">Correo Electronico</span>
                    <input class="input100" type="text" name="email" id="email" placeholder="Correo Electronico..." value="<?php echo $this->data['current_user'][':email'];?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Numero de telefono requerido">
                    <span class="label-input100">Numero de telefono</span>
                    <input class="input100" type="text" name="phone" id="phone" placeholder="Numero de telefono..." value="<?php echo $this->data['current_user'][':phone'];?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Usuario requerido">
                    <span class="label-input100">Contrase??a</span>
                    <input class="input100" type="password" name="password" id="password" placeholder="Contrase??a..." value="<?php echo $this->data['current_user'][':pass'];?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Contrase??a requerida">
                    <span class="label-input100">Repite la contrase??a</span>
                    <input class="input100" type="password" name="vpassword" id="vpassword" placeholder="*************">
                    <span class="focus-input100"></span>
                </div>

                <input class="input100" type="hidden" name="rol" id="rol" value="user">

                <div class="buy-tickets" style="margin-left: auto; margin-right: auto;" >
                    <button style="border-color: black; text-align: center;" class="btn dark-purple" type="submit">Guardar Cambios</button>
                    <br>
                    <br>
                    <br>
                </div><!-- .buy-tickets -->
            </form>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="<?=constant('URL')?>plugins/images/logo 2p.png" alt="logo"></a>
                </figure>

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