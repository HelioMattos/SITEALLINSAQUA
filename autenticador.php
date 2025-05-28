<?php
require_once "Usuario.php";

class Autenticador {
    public static function login(string $email, string $senha): bool {
        session_start();

        $usuario = Usuario::buscarPorEmail($email);

        if (!$usuario) {
            return false;
        }

        if (!password_verify($senha, $usuario['senha'])) {
            return false;
        }

        // Autenticado com sucesso - salvar dados na sessão
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        $_SESSION['usuario_email'] = $usuario['email'];

        return true;
    }

    public static function logout(): void {
        session_start();
        session_unset();
        session_destroy();
    }

    public static function verificar(): bool {
        session_start();
        return isset($_SESSION['usuario_id']);
    }

    // ✅ Adicionado este método para redirecionar se o usuário não estiver logado
    public static function redirecionarSeNaoLogado(string $url = 'login.php') {
        session_start();
        if (!isset($_SESSION['usuario_id'])) {
            header("Location: $url?msgErro=Acesso negado. Faça login primeiro.");
            exit();
        }
    }

    // (opcional) Se quiser mostrar o nome no painel
    public static function getNome(): string {
        session_start();
        return $_SESSION['usuario_nome'] ?? 'Usuário';
    }
}
