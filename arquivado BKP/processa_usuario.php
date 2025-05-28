<?php
require_once 'conectaBD.php';
// Definir o BD (e a tabela)
// Conectar ao BD (com o PHP)

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

if (!empty($_POST)) {
  // Está chegando dados por POST e então posso tentar inserir no banco
  // Obter as informações do formulário ($_POST)
  try {
    // Preparar as informações
      // Montar a SQL (pgsql)
      $sql = "INSERT INTO clientes
                (nome, email, telefone, senha)
              VALUES
                (:nome, :email, :telefone, :senha)";

      // Preparar a SQL (pdo)
      $stmt = $pdo->prepare($sql);

      // Definir/organizar os dados p/ SQL
      $dados = array(
        ':nome' => $_POST['nome'],
        ':telefone' => $_POST['telefone'],
        ':email' => $_POST['email'],
        ':senha' => md5($_POST['senha'])
      );

      // Tentar Executar a SQL (INSERT)
      // Realizar a inserção das informações no BD (com o PHP)
      if ($stmt->execute($dados)) {
        header("Location: login.php?msgSucesso=Cadastro realizado com sucesso!");
      }
  } catch (PDOException $e) {
      //die($e->getMessage());
      header("Location: login.php?msgErro=Falha ao cadastrar...");
  }
}
else {
  header("Location: login.php?msgErro=Erro de acesso.");
}
die();

// Redirecionar para a página inicial (login) c/ mensagem erro/sucesso
 ?>
