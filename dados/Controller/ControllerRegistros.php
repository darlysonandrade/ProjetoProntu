<?php


require_once "../ConexaoModel/ConexaoRegistrar.php";



$ctrl = new ConexaoRegistrar();

$ctrl->Construct();
//$especialidade = [];


$nome_completo = $_REQUEST ['nome_completo'];
$email = $_REQUEST ['email'];
$estado = $_REQUEST ['estados'];
$cidade = $_REQUEST ['cidades'];
$cep = $_REQUEST ['cep'];
$cpf = $_REQUEST ['cpf'];
$rg = $_REQUEST ['rg'];
$endereco= $_REQUEST ['endereco'];
$bairro = $_REQUEST ['bairro'];
$complemento = $_REQUEST ['complemento'];
$celular = $_REQUEST ['celular'];
$telefone = $_REQUEST ['telefone'];
$nacionalidade = $_REQUEST ['nacionalidade'];
$trabalho = $_REQUEST ['trabalho'];
$data_nascimento = $_REQUEST ['data_nascimento'];
$naturalidade = $_REQUEST ['naturalidade'];
$especialidade = $_REQUEST ['especialidades'];
$crm = $_REQUEST ['crm'];





$ctrl->InserirMedico($nome_completo, $email, $estado, $cidade, $cep, $cpf, $rg, $endereco, $bairro, $complemento, $celular, $telefone, $nacionalidade, $trabalho, $data_nascimento, $naturalidade, $especialidade, $crm);



