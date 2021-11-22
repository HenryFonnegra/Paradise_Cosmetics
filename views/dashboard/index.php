<?php require_once 'core/view.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Paradise Cosmetics</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?= constant('URL') ?>plugins/css/bootstrap.min.css">

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?= constant('URL') ?>plugins/css/slick.css">
	<link type="text/css" rel="stylesheet" href="<?= constant('URL') ?>plugins/css/slick-theme.css">

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?= constant('URL') ?>plugins/css/nouislider.min.css">

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?= constant('URL') ?>plugins/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= constant('URL') ?>plugins/css/style3.css">
</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-2">
						<div class="header-logo">
							<a href="#" class="logo">
								<img src="<?= constant('URL') ?>plugins/img/logo4.png" alt="" style="width: 150px; height: 100px;">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-5">
						<div class="header-search">
							<form>
								<input class="input">
								<button class="search-btn">Buscar</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-5 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div>
								<a href="#">
									<i class="far fa-heart"></i>
									<span>Tus favoritos</span>
									<div class="qty">2</div>
								</a>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Carrito</span>
									<div class="qty">3</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="<?= constant('URL') ?>/img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>

										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>
									<div class="cart-summary">
										<small>3 Item(s) selected</small>
										<h5>SUBTOTAL: $2940.00</h5>
									</div>
									<div class="cart-btns">
										<a href="#">View Cart</a>
										<a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->

							<!-- User -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fas fa-user"></i>
									<span>Nombre de usuario</span>
								</a>
								<div class="cart-dropdown" style="border-radius: 15px;">
									<ul>
										<li><a class="dropdown-item" href="<?= constant('URL') ?>user">Informacion personal</a></li>
										<li><a class="dropdown-item" href="#">Compras</a></li>
									</ul>

									<div class="btn-danger" style="border-radius: 15px; text-align: center; ">
										<a href="<?= constant('URL') ?>dashboard/logOut" style="color: white;">Cerrar sesion <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /User -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="#">Polvos</a></li>
					<li><a href="#">Cremas</a></li>
					<li><a href="#">Labiales</a></li>
					<li><a href="#">Shampoo</a></li>
					<li><a href="#">Brochas</a></li>
					<li><a href="#">Accesorios</a></li>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->



	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12 d-flex justify-content-between">
					<div class="section-title">
						<h3 class="title">Nuevos productos</h3>
					</div>

					<div class="row">
						<ul>
							<li><a class="dropdown-item" href="<?= constant('URL') ?>dashboard/getProducts?page=1&order=name">Nombre</a></li>
							<li><a class="dropdown-item" href="<?= constant('URL') ?>dashboard/getProducts?page=1&order=price">Precio</a></li>

						</ul>
					</div>
				</div>
				
				<!-- /section title -->

				<!-- Products tab & slick -->
				<div class="col-md-12">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<div id="tab1" class="tab-pane active">
								<div class="products-slick" data-nav="#slick-nav-1">
									<?php

									for ($i = 0; $i < count($this->data['products']); $i++) {
										echo $this->data['products'][$i];
									}

									?>
								</div>
								<div id="slick-nav-1" class="products-slick-nav">
									<nav aria-label="Page navigation example" class="w-100 mt-5 d-flex justify-content-center align-items-center">
										<ul class="pagination">
											<li class="page-item" id="anterior">
												<a class="page-link" href="<?= constant('URL') ?>dashboard/getProducts?page=<?= $this->data['before'] ?>&order=<?= $this->data['order'] ?>">Anterior</a>
											</li>


											<?php
											for ($i = 1; $i <= $this->data['pagination']; $i++) {

												echo
												'<li class="page-item">
                                					<a class="page-link" href="' . constant('URL') . 'dashboard/getProducts?page=' . $i . '&order=' . $this->data['order'] . '">' . $i . '</a>
                            					</li>';
											}

											?>

											<li class="page-item" id="siguiente">
												<a class="page-link" href="<?= constant('URL') ?>dashboard/getProducts?page=<?= $this->data['after'] ?>&order=<?= $this->data['order'] ?>">Siguiente</a>
											</li>
										</ul>
									</nav>

								</div>
							</div>
							<!-- /tab -->
						</div>
					</div>
				</div>
				<!-- Products tab & slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Nuevos productos</h3>
					</div>
				</div>
				<!-- /section title -->

				<!-- Products tab & slick -->
				<div class="col-md-12">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<div id="tab1" class="tab-pane active">
								<div class="products-slick" data-nav="#slick-nav-1">
									<?php

									for ($i = 0; $i < count($this->data['products']); $i++) {
										echo $this->data['products'][$i];
									}

									?>
								</div>
								<div id="slick-nav-1" class="products-slick-nav">
									<nav aria-label="Page navigation example" class="w-100 mt-5 d-flex justify-content-center align-items-center">
										<ul class="pagination">
											<li class="page-item" id="anterior">
												<a class="page-link" href="<?= constant('URL') ?>dashboard/getProducts?page=<?= $this->data['before'] ?>">Anterior</a>
											</li>


											<?php
											for ($i = 1; $i <= $this->data['pagination']; $i++) {

												echo
												'<li class="page-item">
                                					<a class="page-link" href="' . constant('URL') . 'dashboard/getProducts?page=' . $i . '">' . $i . '</a>
                            					</li>';
											}

											?>

											<li class="page-item" id="siguiente">
												<a class="page-link" href="<?= constant('URL') ?>dashboard/getProducts?page=<?= $this->data['after'] ?>">Siguiente</a>
											</li>
										</ul>
									</nav>

								</div>
							</div>
							<!-- /tab -->
						</div>
					</div>
				</div>
				<!-- Products tab & slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->



	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">About Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Categories</h3>
							<ul class="footer-links">
								<li><a href="#">Hot deals</a></li>
								<li><a href="#">Laptops</a></li>
								<li><a href="#">Smartphones</a></li>
								<li><a href="#">Cameras</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>
						</div>
					</div>

					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Information</h3>
							<ul class="footer-links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Orders and Returns</a></li>
								<li><a href="#">Terms &amp; Conditions</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Service</h3>
							<ul class="footer-links">
								<li><a href="#">My Account</a></li>
								<li><a href="#">View Cart</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Track My Order</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->




	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="<?= constant('URL') ?>plugins/js/index2/jquery.min.js"></script>
	<script src="<?= constant('URL') ?>plugins/js/index2/bootstrap.min.js"></script>
	<script src="<?= constant('URL') ?>plugins/js/index2/slick.min.js"></script>
	<script src="<?= constant('URL') ?>plugins/js/index2/nouislider.min.js"></script>
	<script src="<?= constant('URL') ?>plugins/js/index2/jquery.zoom.min.js"></script>
	<script src="<?= constant('URL') ?>plugins/js/index2/main.js"></script>

</body>

</html>