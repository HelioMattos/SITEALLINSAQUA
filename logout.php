<?php
require_once "autenticador.php";
Autenticador::logout();
header("Location: login.php");
exit;
