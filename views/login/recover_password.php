<?php require_once 'core/view.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= constant('URL') ?>plugins/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= constant('URL') ?>plugins/css/main.css">
	<!--===============================================================================================-->
	<!-- Styles -->
	<link rel="stylesheet" href="<?= constant('URL') ?>plugins/style.css">
	<script src="<?= constant('URL') ?>plugins/js/custom.js"></script>
</head>

<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?= constant('URL') ?>plugins/images/F2.png');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-15 p-b-50">
				<div class="container">
					<div class="site-title" style="margin-left: auto; margin-right: auto;">
						<img src="<?= constant('URL') ?>plugins/images/logo 1.png" alt="logo" width="200px" style="align-items: center; top: 0px;">
					</div><!-- .site-title -->
					<div style="margin-left: auto; margin-right: auto;">
						<h2 style="font-weight: bold;" class="entry-title">Recuperar Contrase??a Paradise Cosmetics</h2>
					</div>
					<br>
					<br>
					<br>
					<form action="<?= constant('URL') ?>recover_password/sendCode" method="POST">
						<div class="wrap-input100">
							<span class="label-input100">Correo Electronico de Registro</span>
							<input class="input100" type="text" name="email" id="email" placeholder="Correo Electronico de Registro...">
							<span class="focus-input100"></span>
						</div>
						<div class="buy-tickets" align="center" style="margin-left: 60%;">
							<button style="border-color: black; background-color: black; text-align: center; margin-left: 50%;" class="btn dark-purple" type="submit">Enviar</button>
						</div><!-- .buy-tickets -->
					</form>
					<form action="<?= constant('URL') ?>recover_password/verifyCode" method="POST">
						<div class="wrap-input100">
							<span class="label-input100">Codigo</span>
							<input class="input100" type="text" name="code" id="code" placeholder="Codigo...">
							<span class="focus-input100"></span>
						</div>
						<div class="buy-tickets">
							<button style="border-color: black; text-align: center; margin-left: 75%;" class="btn dark-purple" type="submit">Validar</button>
						</div><!-- .buy-tickets -->
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="<?= constant('URL') ?>plugins/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= constant('URL') ?>plugins/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= constant('URL') ?>plugins/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= constant('URL') ?>plugins/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= constant('URL') ?>plugins/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= constant('URL') ?>plugins/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= constant('URL') ?>plugins/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= constant('URL') ?>plugins/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= constant('URL') ?>plugins/js/main.js"></script>

</body>

</html>