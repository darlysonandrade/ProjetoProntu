<?php

require "../Controller/UsuarioController.php";

$senha = $_POST["senha_login"];
$usuario = $_POST["nome_login"];

$cont = new UsuarioController();

$cont ->validar($usuario, $senha);



?>