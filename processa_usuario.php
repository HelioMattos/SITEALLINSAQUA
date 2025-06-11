<?php
require_once "usuario.php";
require_once "autenticador.php";

$usuario = new Usuario();
$usuario->nome     = $_POST['nome'] ?? '';
$usuario->email    = $_POST['email'] ?? '';
$usuario->telefone = $_POST['telefone'] ?? '';
$usuario->senha    = $_POST['senha'] ?? '';

if ($usuario->cadastrar()) {
    Autenticador::iniciarSessao();
    $_SESSION['nome'] = $usuario->nome;
    header("Location: login_logado.php");
    exit;
} else {
    header("Location: cadastro.php?msgErro=E-mail já cadastrado");
    exit;
}
