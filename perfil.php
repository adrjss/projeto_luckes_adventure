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

	<!--Profile section-->

	<section class="my-profile">
		<div class="container">
			<div class="profile">
				<img id="img-cliente" src="img/authors/8.jpg"  height="150px"  alt="">
				<div class="text-profile">
					<?php
						include "php/checkuser.php";
						echo'
							<p>'.$user->nome.'</p>
							<p>'.$user->email.'</p>
							<p>'.maskDate($user->dataNasc,"small").'</p>
						';
					?>
				</div>
			</div>
			<div class="posts-profile">
				<h2>Meus posts</h2>
				<?php
					include "php/connection.php";
					include "php/checkuser.php";
					$sql = "SELECT * from view_posts WHERE id_usuario = '$user->id'";
					$resultado = mysqli_query($conexao,$sql);
					if(mysqli_num_rows($resultado)){
						while($linha = mysqli_fetch_assoc($resultado)){
							$mensagem = $linha["mensagem"];
							$data = $linha["date_post"];
							$nome = $linha["nome"];
							$idPost = $linha["id_post"];
							$parametros = "'".$idPost."','".$mensagem."'";//complicado foi isso

						echo'<div class="post">
								<h5>'.$nome.'<span>postou uma atualização</span></h5>
								<div class="post-date">'.maskDate($data,"wide").'</div>
								<p>'.$mensagem.'</p>
								<a href="javascript:requestEdit('.$parametros .')">Editar</a>  /  <a href="php/postDAO.php?method=delete&parameter='.$idPost.'">Apagar</a> 
							</div>';
							}

						}

					mysqli_close($conexao);
					?>
				<div class="post">
					<h5>Pedro Macedo<span>postou uma atualização</span></h5>
					<div class="post-date">21 de junho de 2018</div>
					<p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame.
					venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae </p>
					<a href="login.html">Editar</a>  /  <a href="#">Apagar</a> 
						
				</div>
			</div>
		</div>
		
	</section>
	<!--Profile section end-->
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
	<!-- New SweetAlert2 alert lib -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	
	<script type="text/javascript">

	function requestEdit(id,texto) {
		Swal.fire({
			title: "Edite seu Post",
			text: "Altere o texto e clique em editar, para editar seu post",
			input: 'text',
			inputValue: texto,
			showCancelButton: true,
			confirmButtonText: 'Editar'
		}).then((result) => {
			console.log(result.value)
			if (result.value) {
				$.ajax({
                url: "php/postDAO.php",
                type: 'get',
                data: {
                    method: "update",
                    parameter: id,
                    parameter1: result.value
                },
                //data: { flocal: diary.local },
                success: function (response) {
					//Swal.fire(response,'','success');
					Swal.fire({
						title: response,
						icon: 'success'
					}).then((result) => {
						location.reload();
					});
                },
                error: function () {
                    Swal.fire('Houve um erro ao editar o post','','error');
                }
            	});
			}
		});
	}

    </script>
    </body>
</html>