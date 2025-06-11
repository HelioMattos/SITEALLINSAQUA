<?php include 'header.php'; ?>

<?php
require_once "ponto_turistico.php";
require_once "autenticador.php";

$pontos = PontoTuristico::listarTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title>ALL IN SAQUA</title>
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
							<li><a href="turismo.php">Turismo</a></li>
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
			<h1 class="pacotes-title">Conheça nossos pontos turisticos</h1>

			<div class="pacotes-cards">
				<?php foreach ($pontos as $ponto): ?>
					<a href="<?= htmlspecialchars($ponto->link) ?>" class="card-link">
						<div class="card">
						<div class="card-tag card-tag-top">
							<p>360°</p>
						</div>
						<div class="card-tag card-tag-bottom">
							<p><?= htmlspecialchars($ponto->titulo) ?></p>
						</div>

						<?php if (!empty($ponto->imagem)): ?>
							<img class="card-image" 
								src="data:<?= $ponto->imagem_tipo ?>;base64,<?= base64_encode($ponto->imagem) ?>" 
								alt="<?= htmlspecialchars($ponto->titulo) ?>">
						<?php endif; ?>

						<div class="card-content">
							<p><?= nl2br(htmlspecialchars($ponto->descricao)) ?></p>
						</div>
						</div>
				<?php endforeach; ?>
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
					<input type="email" placeholder="Digite..." id="email">
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