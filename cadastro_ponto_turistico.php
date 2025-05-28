<?php
// Conexão com banco de dados
$host = "localhost";
$user = "turismo_user";
$pass = "Turismo@123";
$db = "turismo";

$conn = new mysqli($host, $user, $pass, $db);

// Processa o formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem_nome = basename($_FILES['imagem']['name']);
        $imagem_destino = "uploads/" . $imagem_nome;

        if (!is_dir("uploads")) {
            mkdir("uploads", 0755, true);
        }

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem_destino)) {
            $sql = "INSERT INTO pacotes (titulo, descricao, preco, imagem) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssds", $titulo, $descricao, $preco, $imagem_destino);

            if ($stmt->execute()) {
                echo "<p>Pacote cadastrado com sucesso!</p>";
            } else {
                echo "<p>Erro ao salvar no banco: " . $stmt->error . "</p>";
            }

            $stmt->close();
        } else {
            echo "<p>Erro ao mover a imagem.</p>";
        }
    } else {
        echo "<p>Erro ao enviar imagem.</p>";
    }
}
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
							<li><a href="cadastro_ponto_turistico.php">Cadastrar pontos Turistico</a></li>
							<li><a href="login.php">login</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>
	<div class="linha">
		<section>
			<div class="cad-body"></div>
			<div class="cad-body">

				<h1 class="cad-h1">Cadastro de Ponto Turísticos</h1>

				<form method="POST" action="" enctype="multipart/form-data" class="cad-form">

					<label class="cad-label">Título:</label>
					<input type="text" name="titulo" class="cad-input" required>

					<label class="cad-label">Descrição:</label>
					<textarea name="descricao" required></textarea>

					<label class="cad-label">Preço:</label>
					<input type="text" name="preco" class="cad-input" required>

					<label class="cad-label">Imagem:</label>
					<input type="file" name="imagem" class="cad-input" accept="image/*" required>

					<input class="cad-input-submit" type="submit" value="Cadastrar">
				</form>
			</div>
		</section>
	</div>

	<footer>
		<div id="footer_content">
			<div id="footer_contacts">
				<h1>ALL in Saqua</h1>
				<p>Saquarema de ponta a ponta.</p>

				<div id="footer_social_media">
					<a href="#" class="footer-link" id="instagram"><i class="fa-brands fa-instagram"></i></a>
					<a href="#" class="footer-link" id="facebook"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#" class="footer-link" id="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
				</div>
			</div>

			<ul class="footer-list">
				<li><h3>Blog</h3></li>
				<li><a href="#" class="footer-link">Tech</a></li>
				<li><a href="#" class="footer-link">Adventures</a></li>
				<li><a href="#" class="footer-link">Music</a></li>
			</ul>

			<ul class="footer-list">
				<li><h3>Products</h3></li>
				<li><a href="#" class="footer-link">App</a></li>
				<li><a href="#" class="footer-link">Desktop</a></li>
				<li><a href="#" class="footer-link">Mapa</a></li>
			</ul>

			<div id="footer_subscribe">
				<h3>Subscribe</h3>
				<p>Digite seu e-mail para ser notificado sobre nossas soluções de notícias</p>
				<div id="input_group">
					<input type="email" placeholder="Digite... " id="email">
					<button><i class="fa-regular fa-envelope"></i></button>
				</div>
			</div>
		</div>

		<div id="footer_copyright">
			&#169; 2023 - All In Saqua
		</div>
	</footer>
</body>
</html>
