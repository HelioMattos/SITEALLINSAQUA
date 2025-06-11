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
		<section>
			<div class="coluna col5 sidebar">
				<h3>Localização</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117636.3063597978!2d-42.52427705!3d-22.871486649999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x975e1971d0baa7%3A0x85c6ef0e0cc50317!2sSaquarema%2C%20RJ%2C%2028990-000!5e0!3m2!1spt-BR!2sbr!4v1700683938307!5m2!1spt-BR!2sbr" width="350" height="390" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<ul class="sem-padding sem-marcador">
					<li>Praça Nossa Sra. de Nazaré, 42 - Centro</li>
					<li>Saquarema - RJ</li>
				</ul>
				<h3>Contato direto</h3>
				<ul class="sem-padding sem-marcador">
					<li>Fone: <strong>(00) 0000-0000</strong></li>
					<li>Email: <strong>contato@allinsaqua.com</strong></li>
					<li>Skipe: <strong>login.login</strong></li>
				</ul>
			</div>
			<div class="coluna col7 contato">
				<h2>Envie sua mensagem</h2>
				<form action="">
					<label for="nome">Seu nome:</label>
					<input type="text" name="nome" placeholder="Digite seu Nome" id="nome" />
					<label for="email">Seu email:</label>
					<input type="text" name="email" placeholder="Digite seu E-mail" id="email" />
					<label for="assunto">Assunto:</label>
					<input type="text" name="assunto" placeholder="Assunto" id="assunto" />
					<label for="mensagem">Mensagem:</label>
					<textarea name="mensagem" placeholder="Digite... " id="mensagem"></textarea>
					<input type="submit" class="botao" name="enviar" value="Enviar mensagem &raquo;" />
				</form>			
			</div>
		</section>
	</div>
	
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