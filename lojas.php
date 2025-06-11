<?php include 'header.php'; ?>

<?php
require_once "autenticador.php";
?>

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
							<?php if (Autenticador::estaLogado()): ?>
								<li><a href="login_logado.php">Perfil</a></li>
							<?php else: ?>
								<li><a href="login.php">login</a></li>
							<?php endif; ?>
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
							<h3>Hambúrguer Artesanal</h3>
							<p>Pão artesanal, carne bovina suculenta, alface, tomate, queijo e molho especial.</p>
						</div>
			
						<!-- Item 2 -->
						<div class="card">
							<img class="card-image" src="img/drogariaa.jpg" alt="Drogarias Alexandre">
							<h3>Drogarias Alexandre</h3>
							<p>Massa crocante, calabresa defumada, cebola e bastante queijo.</p>
	
						</div>
			
						<!-- Item 3 -->
						<div class="card">
							<img class="card-image" src="img/pastel.jpg" alt="Pastel de Carne">
							<h3>Pastel de Carne</h3>
							<p>Pastel recheado com carne temperada, frito na hora e crocante.</p>
							
						</div>
			
						<!-- Item 4 -->
						<div class="card">
							<img class="card-image" src="img/açaí.jpg" alt="Açaí na Tigela">
							<h3>Açaí na Tigela</h3>
							<p>Açaí puro com granola, banana e mel. Refrescante e delicioso!</p>
							
						</div>
			
						<!-- Item 5 -->
						<div class="card">
							<img class="card-image" src="img/suco.jpg" alt="Suco Natural de Laranja">
							<h3>Suco Natural de Laranja</h3>
							<p>Suco fresco feito com laranjas selecionadas. Perfeito para acompanhar sua refeição.</p>
							
						</div>

						<!-- Item 6 -->
						<div class="card">
							<img class="card-image" src="img/açaí.jpg" alt="Açaí na Tigela">
							<h3>Açaí na Tigela</h3>
							<p>Açaí puro com granola, banana e mel. Refrescante e delicioso!</p>
							
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