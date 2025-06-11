<?php
require_once "conectaBD.php";

class Usuario {
    public string $nome;
    public string $email;
    public string $telefone;
    public string $senha;

    // Método 1: Cadastrar novo usuário
    public function cadastrar(): bool {
        $pdo = Conexao::getConexao();

        $stmt = $pdo->prepare("SELECT id FROM clientes WHERE email = ?");
        $stmt->execute([$this->email]);

        if ($stmt->rowCount() > 0) {
            return false;
        }

        $senhaHash = password_hash($this->senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO clientes (nome, email, telefone, senha) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$this->nome, $this->email, $this->telefone, $senhaHash]);
    }

    // Método 2: Buscar usuário para login
    public static function buscarPorEmail(string $email): ?array {
        $pdo = Conexao::getConexao();
        $sql = "SELECT * FROM clientes WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }
}
?>
