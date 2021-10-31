<?php require_once 'core/view.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<!--<link rel="icon" type="image/png" href="<?= constant('URL') ?>plugins/images/icons/favicon.ico"/>-->
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
			<div class="login100-more" style="background-image: url(<?= constant('URL') ?>/plugins/images/F2.png);"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-15 p-b-50">
				<form class="login100-form validate-form" action="<?= constant('URL') ?>signup/registrarUsuario" method="POST" id="register">
					<div class="site-title" style="margin-left: auto; margin-right: auto;">
						<img src="<?= constant('URL') ?>/plugins/images/logo 1.png" alt="logo" width="200px" style="align-items: center; top: 0px;">
					</div><!-- .site-title -->
					<div style="margin-left: auto; margin-right: auto;">
						<h2 style="font-weight: bold;" class="entry-title">Registro Paradise Cosmetics</h2>
					</div>
					<br>
					<br>
					<br>

					<div class="wrap-input100 validate-input" data-validate="Nombres requeridos">
						<span class="label-input100">Nombres</span>
						<input class="input100" name="fname" id="name" type="text" value="" placeholder="Nombres" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Apellidos requeridos">
						<span class="label-input100">Apellidos</span>
						<input class="input100" name="lname" id="surname" type="text" value="" placeholder="Apellidos" required="">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Correo Electronico requerido">
						<span class="label-input100">Correo Electronico</span>
						<input class="input100" name="email" id="email" type="email" value="" placeholder="Correo Electronico" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Numero de telefono requerido">
						<span class="label-input100">Numero de telefono</span>
						<input class="input100" name="phone" id="phone" type="text" value="" placeholder="Numero de telefono" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Nombre de usuario requerido">
						<span class="label-input100">Usuario</span>
						<input class="input100" name="username" id="username" type="text" value="" placeholder="Nombre de usuario" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Contraseña requerida">
						<span class="label-input100">Contraseña</span>
						<input class="input100" name="password" id="password" type="Password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Estoy de acuerdo con la
									<a href="#" class="txt2 hov1">
										Condiciones de uso
									</a>
								</span>
							</label>
						</div>


					</div>

					<div class="buy-tickets">
						<button style="border-color: black; text-align: center; margin-left: 50%;" class="btn dark-purple" type="submit">Crear Cuenta</button>
					</div><!-- .buy-tickets -->
				</form>

				<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
					<div class="toast-header">
						<img src="..." class="rounded mr-2" alt="...">
						<strong class="mr-auto">Mensaje</strong>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="toast-body">
						<?= $this->showMessages() ?>
					</div>
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