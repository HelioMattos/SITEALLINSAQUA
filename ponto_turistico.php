<?php
require_once "conectaBD.php";

class PontoTuristico {
    public string $titulo;
    public string $descricao;
    public string $sobre;
    public string $imagem_tipo = '';
    public string $imagem_blob = '';

    public function cadastrar(): bool {
        $pdo = Conexao::getConexao();
        $sql = "INSERT INTO pacotes (titulo, descricao, sobre, imagem, imagem_tipo) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            $this->titulo,
            $this->descricao,
            $this->sobre,
            $this->imagem_blob,
            $this->imagem_tipo
        ]);
    }

    public static function listarTodos(): array {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->query("SELECT * FROM pacotes ORDER BY criado_em DESC");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function buscarPorId(int $id): ?object {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("SELECT * FROM pacotes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ) ?: null;
    }

    public function atualizar(int $id): bool {
        $pdo = Conexao::getConexao();
        $sql = "UPDATE pacotes SET titulo = ?, descricao = ?, sobre = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$this->titulo, $this->descricao, $this->sobre, $id]);
    }

    public static function excluir(int $id): bool {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("DELETE FROM pacotes WHERE id = ?");
        return $stmt->execute([$id]);
    }


    public static function buscarPorLink(string $link): ?object {
        $pdo = Conexao::getConexao();
        $stmt = $pdo->prepare("SELECT * FROM pacotes WHERE link = ?");
        $stmt->execute([$link]);
        return $stmt->fetch(PDO::FETCH_OBJ) ?: null;
    }
}