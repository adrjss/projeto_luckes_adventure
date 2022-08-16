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
					<li><a href="#">Fórum</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/bg-forum.png">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Nossa Comunidade</h2>
						<p>Um local onde os jogadores podem interagir entre si e postar suas duvidas, perguntas, recomendações e fazer amizades para jogatina</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section community-page set-bg" data-setbg="img/community-bg.jpg">
		<div class="community-warp spad">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="community-top-title">Mais de <?php qtdePost(); ?> posts em nosso fórum</h3>
					</div>
					<div class="col-md-6 text-lg-right">
						<form class="community-filter">
							<label for="fdf5">Ver</label>
							<select id="fdf5">
								<option value="#">Todos</option>
								<!--option value="#">Mais vistos</option-->
							</select>
						</form>
					</div>
				</div>
				<?php
					include "php/connection.php";
					include "php/checkuser.php";
					if($user){
							
						echo '<div class="send-post">
								<div class="container">
									<h2 class="comment-title">Faça seu post de hoje</h2>
									<form class="comment-form" action="php/message.php" method="post">
										<div class="row">
											<div class="col-lg-12">
												<textarea style="height:71px ;" name="fmessagem" placeholder="Messagem"></textarea>
												<button class="site-btn btn-sm" name="fuser" value='.$user->id.'>Enviar
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>';
						
						mysqli_close($conexao);
					}
				?>
				<ul class="community-post-list">
					<?php
						include "php/connection.php";

						$sql = "SELECT * FROM view_posts";
						$resultado = mysqli_query($conexao,$sql);
						if(mysqli_num_rows($resultado)){
							while($linha = mysqli_fetch_assoc($resultado)){
								$mensagem = $linha["mensagem"];
								$data = $linha["date_post"];
								$nome = $linha["nome"];

							/*Substituido pelo metodo no util.php maskDate($data,$type)
							setlocale(LC_ALL, NULL);
							//setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
							setlocale(LC_ALL, 'pt_BR.utf-8');
							date_default_timezone_set('America/Sao_Paulo');
							$dataFormatada =  strftime('%a, %d de %B de %Y', strtotime($data));*/

							echo'<li>
									<div class="community-post">
										<div class="author-avator set-bg" data-setbg="img/authors/8.jpg"></div>
										<div class="post-content">
											<h5>'.$nome.'<span>postou uma atualização</span></h5>
											<div class="post-date">'.maskDate($data,"wide").'</div>
											<p>'.$mensagem.'</p>
											<div class="attachment-file">
												<img src="img/attachment.jpg" alt="">
											</div>
										</div>
									</div>
								</li>';
							}

						}

					mysqli_close($conexao);
					?>
				</ul>
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
    </body>
</html>