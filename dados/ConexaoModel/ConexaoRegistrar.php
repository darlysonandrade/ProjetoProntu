<?php


class ConexaoRegistrar
{
    private $servidor;
    private $usuario;
    private $senha;
    private $nomeBanco;
    private $banco;
    public $query;
    private $sellespec;


    function Construct($servidor = "localhost", $usuario = "root", $senha = "", $nomeBanco = "clientesdb")
    {
        $this->setServidor($servidor);
        $this->setUsuario($usuario);
        $this->setSenha($senha);
        $this->setNomeBanco($nomeBanco);
        $this->Conectar();
    }



    public function setServidor($servidor)
    {
        $this->servidor = $servidor;
    }


    public function getServidor()
    {
        return $this->servidor;
    }


    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }


    public function getUsuario()
    {
        return $this->usuario;
    }


    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    public function getSenha()
    {
        return $this->senha;
    }


    public function setNomeBanco($nomeBanco)
    {
        $this->nomeBanco = $nomeBanco;
    }


    public function getNomeBanco()
    {
        return $this->nomeBanco;
    }


    public function getSellespec()
    {
        return $this->sellespec;
    }

    public function Conectar()
    {
        $this->banco = new mysqli
        (
            $this->getServidor(),
            $this->getUsuario(),
            $this->getSenha(),
            $this->getNomeBanco()
        );
        if ($this->banco->connect_error) {
            die('Erro de conexão(' . $this->banco->connect_errno . '):'
                . $this->banco->connect_error);
        }

    }

    public function Select()
    {
        $select = "SELECT * FROM prontudb";

        $con = $this->getBanco();

        $this->query = mysqli_query($con, $select);

    }

    public function getBanco()
    {
        return $this->banco;
    }

    public function Desconectar()
    {
        mysqli_close($this->banco);
    }


    public function Inserir($nome_login, $senha_login, $email_login)
    {
        $query = "INSERT INTO prontudb(nome_login, senha_login, email_login)
VALUES ('$nome_login','$senha_login','$email_login')";
        $inserir = mysqli_query($this->getBanco(), $query);

        if ($inserir) {

            header("location:../Views/ProntuMedic.php");
            echo "Obrigado por ser cadastrar $nome_login";

        } else {

            echo "Não foi possivel inserir";
            echo "Dados sobre o erro" . mysqli_error($this->getBanco());

        }



        }



    public function InserirMedico($nome_completo, $email, $estado, $cidade, $cep, $cpf, $rg, $endereco, $bairro, $complemento,
                                  $celular, $telefone, $nacionalidade, $trabalho, $data_nascimento, $naturalidade, $especialidade, $crm)
    {

       // $especialidade = implode($especialidade, ",");
       // $this->especialidades($especialidade);

        $query = "INSERT INTO medico(nome_completo, email, estado, cidade, cep, cpf, rg, endereco, bairro, complemento, celular, telefone, 
nacionalidade, trabalho, data_nascimento, naturalidade, especialidades, crm)
VALUES ('$nome_completo', '$email', '$estado', '$cidade', '$cep', '$cpf', '$rg', '$endereco', '$bairro', '$complemento', '$celular', '$telefone', '$nacionalidade', '$trabalho', '$data_nascimento', '$naturalidade', '$especialidade', '$crm')";

        $inserir = mysqli_query($this->getBanco(), $query);

        if ($inserir) {

            echo "Obrigado por ser cadastrar $nome_completo";
            header("location:../Views/ProntuMedic.php");


        } else {

            echo "Não foi possivel inserir";
            echo "Dados sobre o erro" . mysqli_error($this->getBanco());

        }



    }


    public function seleEspec()
    {

        $this->Construct();


        $sql = "SELECT * FROM especialidades ORDER BY nome";

        $this->sellespec = mysqli_query($this->getBanco(), $sql);

    }



    /* function Deletar($id_login){

         $query = "DELETE FROM clientes where id = '$id_login'";
         $deletar = mysqli_query($this->getBanco(), $query);

         if ($deletar){

             echo "Obrigado por deletar!";

         }
         else{
             echo "Não foi possivel inserir o contanto";
             echo "Dados sobre o erro: ".mysqli_error($this->getBanco());

         }


     }*/













}




?>