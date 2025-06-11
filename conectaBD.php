<?php
class Conexao {
    public static function getConexao(): PDO {
        $host = "localhost";
        $db = "turismo";
        $user = "turismo_user";
        $pass = "Turismo@123";

        return new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}
?>

