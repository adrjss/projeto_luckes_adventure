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
			<a class="site-logo" href="index.html">
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
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/5.png">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Sobre o jogo</h2>
						<p>Conheça mais das aventuras do jogo e também da história do nosso personagem Lucke.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section review-page spad">
		<div class="container">
			<div class="row">
				<div class="desc-jogo">
				<h4>Ambientação:</h4>	
				<h5>Ambientação de floresta negra e um castelo/masmorra.</h5>
				<h4><br>História:</h4>
				<h5>O personagem chamado Lucke, teve sua família morta por Godot (o Deus dos Games) quando a vila em que morava foi invadida.
					 Ele nunca se esqueceu disso e busca vingança incessante contra Godot.
					 Após vários meses de treino árduo, Lucke resolve ir atrás de Godot e passará por todos os inimigos para chegar até ele.</h5>
				<h4><br>Estilo de combate:</h4>
				<h5>O combate será corpo a corpo, com espadas, machados, pauladas.Também é possível combate a distância utilizando magia.
					Terá inimigos nas fases, e o objetivo é matar os inimigos para ir pra próxima fase.
					Portões serão aberto após todos inimigos mortos, e você poderá chegar mais perto de godot. </h5>
				<h4><br>Perfil do público-alvo:</h4>
				<h5>Adolescentes e adultos.</h5>
				<h4><br>Classificação etária:</h4>
				<h5>12+.</h5>
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
				<li><a href="index.html">Início</a></li>
				<li><a href="jogo.html">Jogo</a></li>
				<li><a href="forum.php">Fórum</a></li>
				<li><a href="contato.html">Contato</a></li>
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
    </body>
</html>