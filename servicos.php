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
		<section>
			<div class="coluna col4 sidebar">
				<h3>O que fazemos?</h3>
				<img src="img/ideia.jpg" alt="" />
				<ul>
					<li>Pacote de Turismo Personalizado</li>
					<li>Reservas e Pagamentos Via Web 3</li>
					<li>Avaliação e Certificação de Acessibilidade</li>
					<li>Experiência 360º/3D para Empresas Locais</li>
					
				</ul>
			</div>
			<div class="coluna col8">
				
				<h2>Pacote de Turismo Personalizado</h2>
				<p>Ofereça aos usuários a possibilidade de criar pacotes de turismo personalizados com base em seus interesses específicos.
				 Isso incluiria seleção de pontos turísticos, eventos, atividades e opções de hospedagem adaptadas às preferências individuais.</p>
				 <ul>
					<li>Experiência de viagem altamente personalizada.</li>
					<li>Aumento da satisfação do usuário.</li>
					<li>Estímulo ao turismo em diferentes áreas da cidade.</li>	
				</ul>
				
				<h2>Reservas e Pagamentos Via Web 3</h2>
				<p>Facilite a reserva de serviços turísticos, como passeios de trilha,
				 traslados e hospedagem, com a opção de pagamento antecipado usando a tecnologia da web 3 e a carteira de criptomoedas</p>
				 <ul>
					<li>Transações seguras e eficientes.</li>
					<li>Integração com a tendência de uso de criptomoedas.</li>
					<li>Maior conveniência para os usuários.</li>	
				</ul>
				
				<h2>Avaliação e Certificação de Acessibilidade</h2>
				<p>Ofereça um serviço de avaliação e certificação de acessibilidade para estabelecimentos turísticos.
				 A plataforma permitirá que usuários classifiquem a acessibilidade de locais e eventos,
				  com selos de aprovação concedidos por especialistas da plataforma.</p>
				  <ul>
					<li>Incentivo à melhoria da acessibilidade em locais turísticos.</li>
					<li>Informações úteis para turistas com necessidades especiais.</li>
					<li>Selos de certificação para promover estabelecimentos acessíveis.</li>	
				</ul>

				<h2>Experiência 360º/3D para Empresas Locais</h2>
				<p>Ofereça às empresas locais a oportunidade de criar experiências 360º/3D de seus estabelecimentos para inclusão no aplicativo.
				 Isso permitirá que os usuários explorem virtualmente restaurantes, hotéis e outros locais antes de visitá-los</p>
				 <ul>
					<li>Marketing visual avançado para empresas locais.</li>
					<li>Aumento da visibilidade e atratividade.</li>
					<li>Melhoria na tomada de decisão dos usuários.</li>	
				</ul>
				
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