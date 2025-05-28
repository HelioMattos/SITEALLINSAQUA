<?php
require_once "Usuario.php";

class Autenticador {
    private static function iniciarSessao() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login(string $email, string $senha): bool {
        self::iniciarSessao();

        $usuario = Usuario::buscarPorEmail($email);

        if (!$usuario || !password_verify($senha, $usuario['senha'])) {
            return false;
        }

        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        $_SESSION['usuario_email'] = $usuario['email'];

        return true;
    }

    public static function logout(): void {
        self::iniciarSessao();
        session_unset();
        session_destroy();
    }

    public static function verificar(): bool {
        self::iniciarSessao();
        return isset($_SESSION['usuario_id']);
    }

    public static function redirecionarSeNaoLogado(string $url = 'login.php') {
        self::iniciarSessao();
        if (!isset($_SESSION['usuario_id'])) {
            header("Location: $url?msgErro=Acesso negado. Faça login primeiro.");
            exit();
        }
    }

    public static function getNome(): string {
        self::iniciarSessao();
        return $_SESSION['usuario_nome'] ?? 'Usuário';
    }
}
