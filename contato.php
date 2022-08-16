<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Lucke's Adventure</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/icon.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.php">
				<img src="img/logo.png" alt="">
			</a>
			<?php
				include "php/util.php";
				isLogged()
			?>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="index.php">Início</a></li>
					<li><a href="jogo.php">Jogo</a></li>
					<li><a href="forum.php">Fórum</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/bg-contato.png">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Contate-nos</h2>
						<p>Espaço onde você pode entrar em contato conosco para eventuais reclamações e sugestões </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section spad contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="comment-title">Contate-nos</h4>
					<div class="row">
						<div class="col-md-9">
							<ul class="contact-info-list">
								<li><div class="cf-left">Endereço</div><div class="cf-right">Rua Coronel Barros, 254 - SP</div></li>
								<li><div class="cf-left">Telefone</div><div class="cf-right">+55 11 9999-9999</div></li>
								<li><div class="cf-left">E-mail</div><div class="cf-right">support@luckadventure.com</div></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4 class="comment-title">Deixe uma resposta</h4>
						<form class="comment-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Nome">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="Email">
								</div>
								<div class="col-lg-12">
									<input type="text" placeholder="Assunto">
									<textarea placeholder="Messagem"></textarea>
									<button class="site-btn btn-sm">Enviar
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->


	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/footer-logo.png" alt="">
						<div class="social-links">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="img-footer">
					<img src="img/logofooter.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="index.php">Início</a></li>
				<li><a href="jogo.php">Jogo</a></li>
				<li><a href="forum.php">Fórum</a></li>
				<li><a href="contato.php">Contato</a></li>
			</ul>
			<p class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script>

</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="js/map.js"></script>

    </body>
</html>