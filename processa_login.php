<?php
require_once "autenticador.php";

$email = trim(strtolower($_POST['email'] ?? ''));
$senha = $_POST['senha'] ?? '';

if (Autenticador::login($email, $senha)) {
    header("Location: login_logado.php");
    exit;
} else {
    header("Location: login.php?msgErro=E-mail e/ou senha inválidos");
    exit;
}
?>
