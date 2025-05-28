<?php
require_once "autenticador.php";

$email = trim(strtolower($_POST['email'] ?? ''));
$senha = $_POST['senha'] ?? '';

// Verifica se os campos foram preenchidos
if (empty($email) || empty($senha)) {
    header("Location: login.php?msgErro=Por favor, preencha todos os campos obrigatórios.");
    exit;
}

if (Autenticador::login($email, $senha)) {
    header("Location: login_logado.php");
} else {
    header("Location: login.php?msgErro=E-mail e/ou senha inválido(s)");
}
exit;
