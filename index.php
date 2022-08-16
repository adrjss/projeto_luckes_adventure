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
	<link href="https://www.dafont.com/pt/8bit-wonder.font" rel="stylesheet">

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


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/page-top-bg/bg1-home.png">
				<div class="hs-text">
					<div class="container">
						<h2><span>Bem-vindo Lucke's Adventure</span></h2>

						<a href="#" class="site-btn">Obter Lucke's Adventure</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/page-top-bg/bg2-home.png">
				<div class="hs-text">
					<div class="container">
						<h2><span>Bem-vindo Lucke's Adventure</span></h2>
						
						<a href="#" class="site-btn">Obter Lucke's Adventure</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	
	<!-- Recent game section  -->
	<section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.png">
		<div class="container">
			<div class="section-title">
			<div class="cata new">novo</div>
				<h2>Atualizações.</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/4.png">
						</div>
						<div class="rgi-content">
							<h5>Inimigos.</h5>
							<p>Pontos de vida e de dano implementados para o personagem e inimigos.. </p>
							<a href="forum.php" class="comment">3 Comentários</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/3.png">
						</div>
						<div class="rgi-content">
							<h5>Música.</h5>
							<p>Música de fundo e efeitos sonoros para movimentos e golpes adicionados.</p>
							<a href="forum.php" class="comment">3 Comentários</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/2.png">
						</div>
						<div class="rgi-content">
							<h5>Lucke.</h5>
							<p>Um novo ataque especial para o personagem Lucke foi adicionado.</p>
							<a href="forum.php" class="comment">3 Comentários</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- Recent game section end -->


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
	<!-- logo -->
	
	
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
    </body>
</html>