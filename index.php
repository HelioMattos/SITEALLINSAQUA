<?php include 'header.php'; ?>

<?php
require_once "autenticador.php";
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
					<img class="logo" src="img/logo1.jpg" alt="">
					
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
			<div class="coluna col3 sidebar">
				<h3>Mais Procurados</h3>
				<ul class="sem-marcador sem-padding">
					<li><a href="">FLIS 2023</a></li>
					<li><a href="">IGREJA NOSSA SENHORA DE NAZARETH</a></li>
					<li><a href="">MIRANTE DO MORRO DA CRUZ</a></li>
					<li><a href="">RAMPA DO VOO LIVRE</a></li>
					<li><a href="">GRUTA NOSSA SENHORA DE LOURDES</a></li>
					
				</ul>
				<a href="turismo.php" class="botao">Ver todos &raquo;</a>
			</div>
			<div class="coluna col9">
				<h2 style="text-align: center;">O QUE ESTÁ ROLANDO</h2>
				<img class="image-home" src="img/flis.jpeg" alt="" />
				<p>A partir da próxima segunda-feira, 13 de novembro, 
					a Prefeitura de Saquarema vai realizar a segunda edição da Feira Literária de Saquarema – FLIS. 
					 A festa literária acontece até o dia 22/11, das 09h às 20h, no Campo de aviação, 
					 no Centro de Saquarema, com entrada gratuita. Repetindo o grande sucesso da primeira edição, 
					 a FLIS irá homenagear um grande escritor de relevância nacional e internacional: Pedro Bandeira!</p>
			</div>
		</section>
	</div>
	<div class="conteudo-extra">
		<div class="linha">
			<div class="coluna col7">
				<h3>Últimas Notícias</h3>
				<ul class="sem-marcador sem-padding noticias">
					<li>
						<img src="img/skate.jpg" alt="" />
						<h4>Select Series</h4>
						<p>Podemos acreditar que tudo que a vida nos oferecerá no futuro é repetir 
					o que fizemos ontem e hoje. <a href="">Leia mais &raquo;</a></p>
					</li>
					<li>
						<img src="img/surf.jpg" alt="" />
						<h4>Saquarema surf festival 2023</h4>
						<p>A cidade recebeu o Select Series de Skate Street. 
							A disputa garantiu vagas no Knockout Round, 
							fase de grupos do SLS Super Crown. 
							<a href="">Leia mais &raquo;</a></p>
					</li>
					<li>
						<img src="img/saquava.jpeg.jpg" alt="" />
						<h4>Título da notícia publicada no blog</h4>
						<p>Saquá Va’a, o campeonato municipal de canoa havaiana! 
							As disputas acontecerão na Lagoa de Saquarema, 
							na altura do bairro Areal. <a href="">Leia mais &raquo;</a></p>
					</li>
				</ul>
			</div>
			<div class="coluna col5">
				<h3>Últimas Notícias</h3>
				<ul class="sem-marcador sem-padding noticias">
					<li>
						<img src="img/skate.jpg" alt="" />
						<h4>Select Series</h4>
						<p>Podemos acreditar que tudo que a vida nos oferecerá no futuro é repetir 
					o que fizemos ontem e hoje. <a href="">Leia mais &raquo;</a></p>
					</li>
					<li>
						<img src="img/surf.jpg" alt="" />
						<h4>Saquarema surf festival 2023</h4>
						<p>A cidade recebeu o Select Series de Skate Street. 
							A disputa garantiu vagas no Knockout Round, 
							fase de grupos do SLS Super Crown. 
							<a href="">Leia mais &raquo;</a></p>
					</li>
					<li>
						<img src="img/saquava.jpeg.jpg" alt="" />
						<h4>Título da notícia publicada no blog</h4>
						<p>Saquá Va’a, o campeonato municipal de canoa havaiana! 
							As disputas acontecerão na Lagoa de Saquarema, 
							na altura do bairro Areal. <a href="">Leia mais &raquo;</a></p>
					</li>
				</ul>
			</div>
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
