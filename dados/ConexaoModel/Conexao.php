<?php

class Conexao
{
    //put your code here
    private $host = "localhost";
    private $user = "root";
    private $senha = "";
    private $nomeBanco = "clientesdb";
    private $conexao = null;


    private $id_login;
    private $nome_login;
    private $senha_login;


    public function getConexao()
    {

        if (!$this->conexao) {
            $this->conexao = mysqli_connect($this->host, $this->user, $this->senha, $this->nomeBanco);
        }
        return $this->conexao;
    }
    function getId_usuario()
    {
        return $this->id_usuario;
    }

    function getNome_usuario()
    {
        return $this->nome_usuario;
    }

    function getSenha_usuario()
    {
        return $this->senha_usuario;
    }

    function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    function setNome_usuario($nome_usuario)
    {
        $this->nome_usuario = $nome_usuario;
    }


    function setSenha_usuario($senha_usuario)
    {
        $this->senha_usuario = $senha_usuario;
    }




}

