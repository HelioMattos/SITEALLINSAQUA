<?php
require_once("conectaBD.php");

$stmt = $pdo->query("SELECT id, nome, email FROM clientes");
$usuarios = $stmt->fetchAll();

foreach ($usuarios as $usuario) {
    echo "ID: {$usuario['id']} - Nome: {$usuario['nome']} - Email: {$usuario['email']}<br>";
}
?>
