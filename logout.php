<?php
require_once "autenticador.php";
Autenticador::logout();
header("login.php");
exit;
