<?php include 'header.php'; ?>

<?php
require_once "autenticador.php";
require_once "ponto_turistico.php";
Autenticador::redirecionarSeNaoLogado();

$pontos = PontoTuristico::listarTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title>All In Saqua</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/estilo.css" />
	<link rel="stylesheet" href="css/tabela_logado.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="container">
		<?php if (!empty($_GET['msgErro'])) { ?>
		  <div class="alert alert-warning" role="alert">
			<?php echo $_GET['msgErro']; ?>
		  </div>
		<?php } ?>
  
		<?php if (!empty($_GET['msgSucesso'])) { ?>
		  <div class="alert alert-success" role="alert">
			<?php echo $_GET['msgSucesso']; ?>
		  </div>
		<?php } ?>
	  </div>
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
			<div class="">
				<div class="table-container">
					<div class="">
						<h1>Olá, <?php echo Autenticador::getNome(); ?>!</h1>
							<a href="cadastro_ponto_turistico.php" class="btn-cadastrar">
								Cadastrar Ponto Turístico
							</a>
						<table borde ="1">
							<tr>
								<th>Título</th>
								<th>Imagem</th>
								<th>Ações</th>
							</tr>
							<?php foreach ($pontos as $ponto): ?>
								<tr>
								<td><?= htmlspecialchars($ponto->titulo) ?></td>
								<td>
									<img src="data:<?= $ponto->imagem_tipo ?>;base64,<?= base64_encode($ponto->imagem) ?> " class="round-image" alt="Imagem" " width="100">
								</td>
								<td>
									<a href="editar_ponto.php?id=<?= $ponto->id ?>" class="btn-editar">Editar</a>
									<a href="excluir_ponto.php?id=<?= $ponto->id ?>" class="btn-excluir" onclick="return confirm('Excluir?')">Excluir</a>
								</td>
								</tr>
							<?php endforeach; ?>
						</table>	
				</div>
   			</div>

			<div class="btn-sair">
				<a href="logout.php" class="">Sair</a>
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