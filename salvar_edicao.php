<?php
require_once "ponto_turistico.php";
require_once "autenticador.php";
Autenticador::redirecionarSeNaoLogado();

$id = $_POST['id'] ?? null;

$ponto = new PontoTuristico();
$ponto->titulo = $_POST['titulo'] ?? '';
$ponto->descricao = $_POST['descricao'] ?? '';
$ponto->sobre = $_POST['sobre'] ?? '';

$pdo = Conexao::getConexao();

// Verifica se nova imagem foi enviada
if (isset($_FILES['nova_imagem']) && $_FILES['nova_imagem']['error'] === UPLOAD_ERR_OK) {
    $ponto->imagem_tipo = $_FILES['nova_imagem']['type'];
    $ponto->imagem_blob = file_get_contents($_FILES['nova_imagem']['tmp_name']);

    // Atualiza com nova imagem
    $sql = "UPDATE pacotes SET titulo = ?, descricao = ?, sobre = ?, imagem = ?, imagem_tipo = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $ok = $stmt->execute([
        $ponto->titulo,
        $ponto->descricao,
        $ponto->sobre,
        $ponto->imagem_blob,
        $ponto->imagem_tipo,
        $id
    ]);
} else {
    // Atualiza apenas os textos (mantém imagem atual)
    $ok = $ponto->atualizar($id);
}

if ($ok) {
    header("Location: login_logado.php");
    exit;
} else {
    echo "Erro ao atualizar ponto turístico.";
}
