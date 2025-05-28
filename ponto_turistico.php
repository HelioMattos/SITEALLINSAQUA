<?php
require_once "conectaBD.php";

class PontoTuristico {
    public int $id;
    public string $titulo;
    public string $descricao;
    public float $preco;
    public string $imagem;
    public string $criado_em;

    public static function listarTodos(): array {
        $pdo = Conexao::getConexao();
        $sql = "SELECT * FROM pacotes ORDER BY criado_em DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $pontos = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $ponto = new PontoTuristico();
            $ponto->id = $row['id'];
            $ponto->titulo = $row['titulo'];
            $ponto->descricao = $row['descricao'];
            $ponto->preco = $row['preco'];
            $ponto->imagem = $row['imagem'];
            $ponto->criado_em = $row['criado_em'];
            $pontos[] = $ponto;
        }

        return $pontos;
    }
}
?>
