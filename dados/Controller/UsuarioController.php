<?php

require_once '../ConexaoModel/ConexaoCidades.php';
require_once '../ConexaoModel/Conexao.php';
require_once '../ConexaoModel/ConexaoRegistrar.php';

class UsuarioController {

    public $sellespec;
    public $db;
    public $sellestados;

    //put your code here
    public function validar($usuario, $senha) {

        $con = new Conexao();

        $sql = "select * from prontudb where nome_login ='$usuario' and senha_login ='$senha'";
        $resultado = mysqli_query($con->getConexao(), $sql);


        if (mysqli_num_rows($resultado) > 0) {

            header("location:../Views/telaPrincipal.php");
        }else{

            header("location:../Views/ProntuMedic.php");

        }
    }


public function seleEstados(){

    $con = new ConexaoCidades();
    $con->conect();


    $sql = "SELECT * FROM estados WHERE cod_estados ORDER BY sigla";

    $this->sellestados  = mysqli_query($con->getDb(), $sql);

}

public function cidades(){
    $con = new ConexaoCidades();
    $con->conect();
    $this->db = $con->getDb();

}



public function seleEspec(){

    $con = new ConexaoRegistrar();
    $con->seleEspec();

    $this->sellespec = $con->getSellespec();


}




}





?>


