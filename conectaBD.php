<?php
// Dados de conexão com o banco de dados
$host = 'localhost';
$db = 'allins';
$user = 'allins';
$password = '';

// Conectando ao banco de dados PostgreSQL
$conn = pg_connect("host=$host dbname=$db user=$user password=$password");

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . pg_last_error());
}

// Recebendo dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

// Inserindo os dados no banco de dados
$query = "INSERT INTO clientes (nome, email, telefone, endereco) VALUES ($1, $2, $3, $4)";
$result = pg_query_params($conn, $query, array($nome, $email, $telefone, $endereco));

if ($result) {
    echo "<h1>Cadastro realizado com sucesso!</h1>";
} else {
    echo "<h1>Erro ao realizar o cadastro!</h1>";
}

// Fechando a conexão com o banco de dados
pg_close($conn);
?>
