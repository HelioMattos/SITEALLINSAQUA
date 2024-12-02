<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title>All In Saqua</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/estilo.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="header">
		<div class="linha">
			<header>
				<div class="coluna col4">
					<img src="img/logo1.jpg" alt="">
				</div>
				<div class="coluna col8">
					<nav>
						<ul class="menu inline sem-marcador">
							<li><a href="index.php">home</a></li>
							<li><a href="turismo.php">turismo</a></li>
							<li><a href="lojas.php">lojas</a></li>
							<li><a href="sobre.php">sobre</a></li>
							<li><a href="contato.php">contato</a></li>
							<li><a href="ativos.php">ativos</a></li>
							<li><a href="login.php">login</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>
	<div class="linha">
				<section id="pacotes" class="pacotes">
					<h2>Estabelecimentos</h2>
					<div class="pacotes-cards">
						<div class="card">
							<img class="card-image" src="img/padariap.jpg" alt="Padaria da Ponte">
							<h3>Padaria da ponte</h3>
							<p>Pão artesanal, carne bovina suculenta, alface, tomate, queijo e molho especial.</p>
							<a href="https://www.instagram.com/padariadaponte/" target="_blank">Acesse nosso Instagran</a>
						</div>
			
						<!-- Item 2 -->
						<div class="card">
							<img class="card-image" src="img/drogariaa.jpg" alt="Drogarias Alexandre">
							<h3>Drogarias Alexandre</h3>
							<p>Aqui você encontra tudo mais barato</p>
							<a href="https://drogariasalexandre.com.br/" target="_blank">Acesse nosso site</a>
	
						</div>
			
						<!-- Item 3 -->
						<div class="card">
							<img class="card-image" src="img/ncores.jpeg" alt="Ncores Tintas">
							<h3>Ncores Tintas</h3>
							<p>Onde comprar e mais barato.</p>
							<br>
							<a href="https://www.ncores.com.br/" target="_blank">Acesse nosso site</a>
							
						</div>
			
						<!-- Item 4 -->
						<div class="card">

							<img class="card-image" src="img/seianglo.jpeg" alt="SEI ANGLO">
							<h3>SEI ANGLO</h3>
							<p>Educação que prepara o aluno para os principais vestibulares e também para a vida</p>
							<a href="https://seianglosaquarema.com.br/" target="_blank">Acesse nosso site</a>
							
						</div>
			
						<!-- Item 5 -->
						<div class="card">
							<img class="card-image" src="img/saquasuco.jpg" alt="Suco Natural de Laranja">
							<h3>SAQUA SUCO</h3>
							<p>Suco fresco feito com laranjas selecionadas. Perfeito para acompanhar sua refeição.</p>
							<a href="https://www.instagram.com/restaurantesaquasuco/" target="_blank">Acesse nosso Instagran</a>
							
						</div>

						<!-- Item 6 -->
						<div class="card">
							<img class="card-image" src="img/estrelagrill.jpg" alt="ESTRELA GRILL">
							<h3>RESTAURANTE ESTRELA GRILL</h3>
							<p>Açaí puro com granola, banana e mel. Refrescante e delicioso!</p>
							<a href="https://www.instagram.com/estrelagrillchurrascaria_/" target="_blank">Acesse nosso Instagran</a>
							
						</div>

					</div>
				</section>

	</div>
	
	<footer>
		<div id="footer_content">
			<div id="footer_contacts">
				<h1>ALL in Saqua</h1>
				<p>Saquarema de ponta a ponta.</p>

				<div id="footer_social_media">
					<a href="#" class="footer-link" id="instagram">
						<i class="fa-brands fa-instagram"></i>
					</a>

					<a href="#" class="footer-link" id="facebook">
						<i class="fa-brands fa-facebook-f"></i>
					</a>

					<a href="#" class="footer-link" id="whatsapp">
						<i class="fa-brands fa-whatsapp"></i>
					</a>
				</div>
			</div>
			
			<ul class="footer-list">
				<li>
					<h3>Blog</h3>
				</li>
				<li>
					<a href="#" class="footer-link">Tech</a>
				</li>
				<li>
					<a href="#" class="footer-link">Adventures</a>
				</li>
				<li>
					<a href="#" class="footer-link">Music</a>
				</li>
			</ul>

			<ul class="footer-list">
				<li>
					<h3>Products</h3>
				</li>
				<li>
					<a href="#" class="footer-link">App</a>
				</li>
				<li>
					<a href="#" class="footer-link">Desktop</a>
				</li>
				<li>
					<a href="#" class="footer-link">Mapa</a>
				</li>
			</ul>

			<div id="footer_subscribe">
				<h3>Subscribe</h3>

				<p>
					Digite seu e-mail para ser notificado sobre nossas soluções de notícias
				</p>

				<div id="input_group">
					<input type="email" placeholder="Digite... " id="email">
					<button>
						<i class="fa-regular fa-envelope"></i>
					</button>
				</div>
			</div>
		</div>

		<div id="footer_copyright">
			&#169
			2023 - All In Saqua
		</div>
	</footer>
</body>
</html>