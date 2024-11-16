<?php

require_once 'conectaBD.php';

if (!empty($_POST)) {
    session_start();

    try {
        // Debug: Verificar dados recebidos

        // Ajustar para os nomes corretos do formulário
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;

        // Verificar se os campos estão preenchidos
        if (!$username || !$password) {
            die("Campos obrigatórios não preenchidos.");
        }

        // Montar a consulta SQL
        $sql = "SELECT * FROM clientes WHERE email = :email AND senha = :senha";

        // Preparar a consulta
        $stmt = $pdo->prepare($sql);

        // Definir os dados para a consulta
        $dados = array(
            ':email' => $username,
            ':senha' => md5($password)
        );

        // Executar a consulta
        $stmt->execute($dados);

        // Debug: Exibir detalhes da consulta

        // Buscar o resultado
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Debug: Exibir o resultado

        // Verificar se um usuário foi encontrado
        if ($result) {
            $_SESSION['nome'] = $result['nome'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['senha'] = $result['senha'];

            // Redirecionar para a página de sucesso
            header("Location: login_logado.php");
        } else {
            session_destroy();
            header("Location: login.php?msgErro=E-mail e/ou Senha inválido(s).");
        }
    } catch (PDOException $e) {
        echo 'Erro na consulta: ' . $e->getMessage();
        die();
    }
} else {
    header("Location: index.php?msgErro=Você não tem permissão para acessar esta página.");
}
die();
?>
