<?php
require_once "usuario.php";

class Autenticador
{
    // Inicia a sessão apenas se ainda não estiver iniciada
    public static function iniciarSessao()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Tenta fazer login com e-mail e senha
    public static function login(string $email, string $senha): bool
    {
        self::iniciarSessao();

        $usuario = Usuario::buscarPorEmail($email);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            return true;
        }

        return false;
    }

    // Verifica se o usuário está logado
    public static function estaLogado(): bool
    {
        self::iniciarSessao();
        return isset($_SESSION['nome']);
    }

    // Retorna o nome do usuário logado
    public static function getNome(): string
    {
        self::iniciarSessao();
        return $_SESSION['nome'] ?? '';
    }

    // Encerra a sessão (logout)
    public static function logout()
    {
        self::iniciarSessao();
        session_unset();
        session_destroy();
    }

    // Redireciona para login se não estiver logado
    public static function redirecionarSeNaoLogado(string $url = "login.php")
    {
        if (!self::estaLogado()) {
            header("Location: $url");
            exit;
        }
    }
}
