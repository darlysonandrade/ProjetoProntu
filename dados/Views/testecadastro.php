<?php
include "../Controller/UsuarioController.php";

$con = new UsuarioController();

$con->seleEstados();


?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />


    <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!--[endif]-->
</head>

<body>

<div  class="w3-container">
    <a class="header"  href="" style="text-decoration:none" > Registrar Usúario </a>
</div>
<form class="form-horizontal" method="post" action="../Controller/ControllerRegistros.php" >
    <div class="box-body">
        <div class="form-group">
            <label class="col-sm-2 control-label">Nome Completo</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nome_completo" placeholder="Nome Completo">
            </div>
            <label class="col-sm-1 control-label">Email</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
        </div>

        <!-- /CIDADE/ESTADOS -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Estado</label>
            <div class="col-sm-4">

                <select class="form-control" name="estado" id="estados" data-placeholder=" Selecione o Estado">
                    <option value="" ></option>
                    <?php

                    while ($row = mysqli_fetch_assoc($con->sellestados) )
                    {
                        echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
                    }
                    ?>
                    </option>
                </select>

            </div>
            <label  class="col-sm-1 control-label">Cidade</label>
            <div class="col-sm-4">

                <select  class="form-control" name="cidades" id="cidades">
                    <option value="">Escolha um estado</option>
                </select>

            </div>
        </div>


        <!-- cep-rg-cpf -->
        <div class="form-group">
            <label class="col-sm-2 control-label">CEP</label>
            <div class="col-sm-3">
                <input type="text" class="form-control"  name="cep" data-inputmask="&quot;mask&quot;: &quot;99999-999&quot;" data-mask="" placeholder="CEP">
            </div>
            <label class="col-sm-1 control-label">CPF</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="cpf" data-inputmask="&quot;mask&quot;: &quot;999.999.999-99&quot;" data-mask="" placeholder="CPF">
            </div>
            <label  class="col-sm-1 control-label">RG</label>
            <div class="col-sm-2">
                <input type="text" class="form-control"  name="rg" placeholder="RG">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Endereço</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" name="endereco" placeholder="Endereço">
            </div>
            <label class="col-sm-1 control-label">Bairro</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" name="bairro" placeholder="Bairro">
            </div>
            <label class="col-sm-2 control-label">Complemento</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="complemento" placeholder="Complemento">
            </div>
        </div>

        <!-- celular mascarás -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Celular</label>

            <div class="col-sm-4">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control" name="celular" data-inputmask="&quot;mask&quot;: &quot;(99) 99999-9999&quot;" data-mask="" placeholder="Celular">
                </div>
            </div>
            <label class="col-sm-1 control-label">Telefone</label>

            <div class="col-sm-4">
                <div class="input-group">

                    <div class="input-group-addon">
                        <i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i>
                    </div>
                    <input type="text" class="form-control" name="telefone" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="" placeholder="Telefone">
                </div>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Nacionalidade</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nacionalidade" placeholder="Nacionalidade">
            </div>
            <label class="col-sm-1 control-label">Trabalho</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="trabalho" placeholder="Trabalho">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Data de Nascimento</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" name="data_nascimento" placeholder="Data de Nascimento">
            </div>
            <label class="col-sm-2 control-label">Naturalidade</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="naturalidade" placeholder="Naturalidade">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Especialidade</label>
            <div class="col-sm-4">
                <input type="text" class="form-control"  name="especialidade" placeholder="especialidade">

            </div>
            <label class="col-sm-1 control-label">CRM</label>
            <div class="col-sm-4">
                <input type="text" class="form-control"  name="crm" placeholder="CRM">
            </div>
        </div>



        <!--fim-->
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary pull-right">Cadastrar Medico</button>
    </div>
    <!-- /.box-footer -->
</form>
</body>
</html>