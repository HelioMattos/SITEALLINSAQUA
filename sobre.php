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
			<div class="coluna col8">
				<h2>Saquarema</h2>
				<p>Saquarema é uma cidade turística sem uma plataforma digital específica para apoiar turistas e moradores.
					Enfatize a importância da tecnologia no turismo globalizado.
					Apresente a necessidade de criar o "All in Saquarema" para impulsionar o turismo local.
				</p>

				<h2>O All in Saquarem</h2>
				<p>Descrição geral do aplicativo: pontos turísticos, hospedagem, traslados, acessibilidade, eventos, serviços de emergência, alimentação e dicas dos usuários.
					Objetivo principal: melhorar a experiência do turista, impulsionar setores locais e promover um turismo sustentável.
					Destaque a interação dos usuários através de avaliações, comentários e compartilhamento de experiências.
				</p>

				<h2>Funcionalidades-Chave</h2>
				<p>Personalização: Ofereça sugestões personalizadas com base nos interesses dos usuários.
					Transação via web 3: Facilite agendamentos com pagamento antecipado para atividades e estabelecimentos, usando a carteira de criptomoedas.
					Detalhamento para acessibilidade: Comunique características de acessibilidade por meio de textos, ícones e classificações de usuários.
					Experiência 360º/3D: Proporcione uma visão ampla e interativa dos pontos turísticos e estabelecimentos.
				</p>

				<h2>Benefícios e Próximos Passos</h2>
				<p>Benefícios para a comunidade: Geração de empregos, crescimento do comércio local e turismo sustentável.
					Cash Back: Ofereça um incentivo adicional com cashback para estimular o consumo local.
					Chamado para Ação: Convide investidores, parceiros e usuários a se envolverem no projeto,
					 destacando a contribuição para a comunidade e a economia local.
				</p>
				
				<h2>Sobre nós</h2>
				<p>Somos um grupo de estudantes de Engenahria de Software, buscando inovar e se aventurando
				na criação de um website e app, embarcando em uma jornada que vai além das linhas de código.</p>
				<p>Neste processo buscamos uma oportunidade única para aplicar teoria à prática, 
				transformando conceitos acadêmicos em soluções tangíveis e funcionais.</p>
				<p>Além da experiência técnica, desenvolvemos habilidades essenciais para o mundo profissional, 
				como comunicação eficaz, trabalho em equipe e resolução colaborativa de problemas</p>
				<p>Esse projeto não se limita apenas ao código-fonte, abrange também  a compreensão das 
				necessidades dos usuários, a melhoria contínua e a entrega de uma experiência final 
				que vai além das expectativas</p>
				<h2>Porque desse projeto?</h2>
				<p>No mundo globalizado a tecnologia passa a ter grande importância nas interações sociais e 
				econômicas e no turismo não é diferente, sendo quase que impossível ter um turismo de sucesso 
				sem o emprego de plataformas de ajuda.</p>
				<p>Em nosso município não temos nenhum suporte ou plataforma digital específica para o tema. 
				Levando em consideração que a cidade de Saquarema é uma cidade turística e que necessita do 
				turismo como parte de geração de renda de seus munícipes, é primordial a elaboração do nosso projeto.</p>
				<p>Visando ajudar não só os turistas, mas também os moradores, nosso app vai trazer não só os pontos turísticos, 
				como também, locais para se hospedar, traslados, acessibilidade de cada lugar, eventos, serviços de emergência, 
				local para alimentação e dicas dos próprios usuários, que poderão interagir entre si pela plataforma.</p>
				<p>Assim nasce o All In Saqua</p>

			</div>
			<div class="coluna col4 sidebar">
				<h3></h3>
				<img src="img/login.jpg" alt="" />

				<a href="servicos.php">serviços</a>
				
				
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