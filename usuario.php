<?php
require_once "conectaBD.php";

class Usuario {

    // Verifica se já existe um usuário com o e-mail informado
    public static function buscarPorEmail(string $email): ?array {
        $pdo = Conexao::getConexao();
        $sql = "SELECT * FROM clientes WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    // Insere um novo usuário no banco de dados
    public static function salvarUsuario(string $nome, string $email, string $telefone, string $senha): bool {
        $pdo = Conexao::getConexao();
        $sql = "INSERT INTO clientes (nome, email, telefone, senha) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$nome, $email, $telefone, $senha]);
    }
}
?>
