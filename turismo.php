<?php include 'header.php'; ?>

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
							<li><a href="login.php">login</a></li>
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
			  <div class="card">
				<a href="igreja.php">
				<div class="card-tag card-tag-top">
				  <p>360°</p>
				</div>
				<div class="card-tag card-tag-bottom">
				  <p>Igreja</p>
				</div>
				<img class="card-image" src="img/saqua.jpeg" alt="">
				<div class="card-content">
					<h1>
						A Igreja de Nossa Senhora de Nazareth foi originalmente construída em 1662,
						passou por reformas em 1820 e é uma das construções mais 
						antigas da região de Saquarema, na região litorânea do Rio de Janeiro.
					</h1>				  
				</div>
			    </a>
			  </div>

			  <div class="pacotes-cards">
				<div class="card">
				  <a href="voo.php">
				  <div class="card-tag card-tag-top">
					<p>360°</p>
				  </div>
				  <div class="card-tag card-tag-bottom">
					<p>Voo Livre</p>
				  </div>
				  <img class="card-image" src="img/voo.jpeg" alt="">
				  <div class="card-content">
					    <h1>
							A rampa de voo livre de Pepê, situada a uma altitude de 750 metros
							do nível do mar e localizada no distrito de Sampaio Corrêa, 
							]atrai um grande número de adeptos da modalidade, 
							tendo em vista o bom naipe de atrações proporcionado por 
							magnífica visão da serra, do mar e das lagoas. 
						</h1>				  
				  </div>
				  </a>
				</div>
			</div>

			<div class="pacotes-cards">
				<div class="card">
				  <a href="sambaquis.php">
				  <div class="card-tag card-tag-top">
					<p>360°</p>
				  </div>
				  <div class="card-tag card-tag-bottom">
					<p>Sambaquis</p>
				  </div>
				  <img class="card-image" src="img/sambaquis.jpeg" alt="">
				  <div class="card-content">
					    <h1>
							Sítio arqueológico é um local onde são encontrados evidências de culturas passadas.
						O sítio arqueológico de ocupação litorânea característico da região de Saquarema é o sambaqui.
						Os sambaquis são “Bens Nacionais”, protegidos pela Lei Federal 3924 de 26 de julho de 1961.						
						</h1>				  
				  </div>
				  </a>
				</div>
			</div>
			<div class="pacotes-cards">
				<div class="card">
				  <a href="mirante.php">
				  <div class="card-tag card-tag-top">
					<p>360°</p>
				  </div>
				  <div class="card-tag card-tag-bottom">
					<p>Mirante</p>
				  </div>
				  <img class="card-image" src="img/mirante.jpg" alt="">
				  <div class="card-content">
					    <h1>
						O mirante do Morro da Cruz oferece uma paisagem bucólica, 
						apresentando a Lagoa de Saquarema banhando a sede do município.
						 O pôr-do-sol é imperdível. É ideal para fotos e filmagens, 
						 tendo como fundo, a lagoa e o mar.
						</h1>				  
				  </div>
				  </a>
				</div>			
			
			<div class="pacotes-cards">
				<div class="card">
				  <a href="gruta.php">
				  <div class="card-tag card-tag-top">
					<p>360°</p>
				  </div>
				  <div class="card-tag card-tag-bottom">
					<p>Gruta N.S. de Lourdes</p>
				  </div>
				  <img class="card-image" src="img/grutansl.jpg" alt="">
				  <div class="card-content">
						<h1>
							A imagem da Santa, localizada na gruta próxima à 
							Igreja de Nossa Senhora de Nazareth, bem como sua proximidade com o mar, 
							formam um conjunto arquitetônico-religioso deslumbrante.
						</h1>					  
				  </div>
				  </a>
				</div>
									
				<div class="pacotes-cards">
					<div class="card">
						<a href="veu.php">
					  <div class="card-tag card-tag-top">
						<p>360°</p>
					  </div>
					  <div class="card-tag card-tag-bottom">
						<p>Cachoeira Véu da Noiva</p>
					  </div>
					  <img class="card-image" src="img/veu.jpeg" alt="">
					  <div class="card-content">
							<h1>
								A cachoeira Veú das Noivas, localizada na Serra do Roncador, 
								atrai muitos visitantes por sua beleza.
							</h1>				  
					  </div>
					  </a>
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