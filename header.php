<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>All IN</title>
    <style>
        .navbar {
            background-color: #007bff;
            padding: 10px;
            color: #fff;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <?php if (isset($_SESSION['email'])): ?>
            Bem-vindo, <?php echo htmlspecialchars($_SESSION['email']); ?> |
            <a href="logout.php" style="color: #fff;">Sair</a>
        <?php else: ?>
            <a href="login.php" style="color: #fff;">Entrar</a>
        <?php endif; ?>
    </div>
</body>
</html>
