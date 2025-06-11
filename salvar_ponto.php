<?php
require_once "ponto_turistico.php";

$ponto = new PontoTuristico();
$ponto->titulo = $_POST['titulo'] ?? '';
$ponto->descricao = $_POST['descricao'] ?? '';
$ponto->sobre = $_POST['sobre'] ?? '';

if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $ponto->imagem_tipo = $_FILES['imagem']['type'];
    $ponto->imagem_blob = file_get_contents($_FILES['imagem']['tmp_name']);
} else {
    echo "Erro ao enviar imagem.";
    exit;
}

if ($ponto->cadastrar()) {
    header("Location: login_logado.php");
    exit;
} else {
    echo "Erro ao cadastrar ponto turístico.";
}
