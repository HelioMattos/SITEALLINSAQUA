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
							<li><a href="servicos.php">serviços</a></li>
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
			<div class="coluna col8">
				<h1>Mirante do Morro da Cruz</h1>
            <img class="card-image" src="img/mirante.jpg" alt="Imagem do Mirante do Morro da Cruz">
            <div class="content">
                <h2>Sobre o Mirante</h2>
                <p>
                    O Mirante do Morro da Cruz é um dos pontos turísticos mais procurados de Saquarema. 
                    Localizado em uma região de fácil acesso, oferece uma vista incrível da Lagoa de Saquarema 
                    e do litoral, tornando-se o local perfeito para apreciar o pôr-do-sol ou tirar fotografias.
                </p>
                <p>
                    Além da paisagem, o local proporciona uma sensação de tranquilidade e conexão com a natureza, 
                    sendo ideal para visitantes que buscam relaxamento e um contato mais próximo com o meio ambiente.
                </p>
                <h2>O que esperar</h2>
                <ul>
                    <li>Vista panorâmica da Lagoa de Saquarema e do oceano.</li>
                    <li>Local ideal para fotos e filmagens.</li>
                    <li>Excelente ponto para observar o pôr-do-sol.</li>
                </ul>
                <p>
                    Não deixe de visitar o Mirante em sua próxima passagem por Saquarema e aproveitar o cenário único que ele oferece.
                </p>
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