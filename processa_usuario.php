<?php
// Ativa exibição de erros (bom para depurar)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Importa a classe Usuario (ela precisa estar no arquivo Usuario.php)
require_once "Usuario.php";

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário com segurança
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Validação simples (você pode melhorar)
    if (empty($nome) || empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos obrigatórios.";
        exit;
    }

    // Criptografa a senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Verifica se já existe um usuário com esse e-mail
    if (Usuario::buscarPorEmail($email)) {
        echo "E-mail já cadastrado!";
    } else {
        // Tenta salvar o usuário
        if (Usuario::salvarUsuario($nome, $email, $telefone, $senhaHash)) {
            echo "Usuário cadastrado com sucesso!";
            // Redireciona após 3 segundos (opcional)
            header("refresh:3;url=login.php");
        } else {
            echo "Erro ao cadastrar o usuário.";
        }
    }
} else {
    echo "Acesso inválido.";
}
?>


