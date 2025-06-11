<?php
require_once "ponto_turistico.php";
require_once "autenticador.php";
Autenticador::redirecionarSeNaoLogado();

$id = $_GET['id'] ?? null;

if ($id && PontoTuristico::excluir($id)) {
    header("Location: login_logado.php");
    exit;
} else {
    echo "Erro ao excluir ponto turístico.";
}
