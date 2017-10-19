<?php


require_once "../ConexaoModel/ConexaoRegistrar.php";



$ctrl = new ConexaoRegistrar();

$ctrl->Construct();

$nome_login = $_REQUEST ['nome_login'];
$senha_login = $_REQUEST ['senha_login'];
$email_login = $_REQUEST ['email_login'];

$ctrl->Inserir($nome_login, $senha_login, $email_login);







?>
