<?php
require_once "autenticador.php";
Autenticador::redirecionarSeNaoLogado();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>All In Saqua</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
							<li><a href="cadastro_ponto_turistico.php">Cadastrar pontos Turistico </a></li>
                            <li><a href="login.php">login</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
    </div>

    <div class="linha">
        <section>
            <div class="coluna col8">
                <div class="container">
                    <h1>Olá, <?php echo htmlspecialchars(Autenticador::getNome()); ?>!</h1>
                    <a href="cadastro_ponto_turistico.php">
                        <button>Cadastrar Ponto Turístico</button>
                    </a>
                </div>

                <div class="container" style="margin-top: 20px;">
                    <a href="logout.php" class="btn btn-dark">Sair</a>
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
            &#169 2023 - All In Saqua
        </div>
    </footer>
</body>
</html>
