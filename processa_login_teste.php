<?php
session_start();
require_once("conectaBD.php");

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// Debug temporário
echo "Email: $email<br>";




echo "Senha digitada: $senha<br>";

$stmt = $pdo->prepare("SELECT * FROM clientes WHERE email = ?");
$stmt->execute([$email]);
$usuario = $stmt->fetch();

if ($usuario) {
    echo "Usuário encontrado: {$usuario['nome']}<br>";
    echo "Hash do banco: {$usuario['senha']}<br>";

    if (password_verify($senha, $usuario['senha'])) {
        echo "Senha correta!";
        $_SESSION['adm'] = $usuario['nome'];
        // header("Location: cadastro_pacote.php"); // temporariamente removido
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}
?>
