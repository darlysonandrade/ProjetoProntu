<?php
include "../Controller/UsuarioController.php";

$con = new UsuarioController();

$con->seleEstados();


$con->seleEspec();


?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prontuário Medico/DevryFacimp</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="stylesheet" href="../bootstrap/dist/css/skins/skin-blue.min.css">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bootstrap/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bootstrap/bower_components/Ionicons/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../bootstrap/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../bootstrap/plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../bootstrap/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="../bootstrap/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../bootstrap/bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../bootstrap/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../bootstrap/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../bootstrap/dist/css/skins/skin-blue.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="../jss/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../jss/funcao.js"></script>
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->  <header class="main-header">

        <!-- Logo -->
        <a href="telaPrincipal.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b></b>ProntuM</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>ProntuárioMédico</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->

                    <!-- Tasks Menu -->

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <i class="fa fa-mail-reply-all"></i>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Sair do Sistema</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">

                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="ProntuMedic.php" class="btn btn-default btn-flat">Sair</a>
                                </div>

                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left">
                    <img  src="../img/logo32.png" width="70%" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">

                    <!-- Status -->

                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header"></li>
                <!-- Optionally, you can add icons to the links -->

                <li class="#"><a href="agendamento.php"><i class="fa fa-medkit"></i> <span>Agendamento</span></a></li>

                <li class="treeview">

                <li class="#"><a href="atendimento.php"><i class="fa fa-ambulance"></i><span>Atendimento</span></a>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                        </a>
              </span>

                </li>

                <li class="treeview">


                    <a href="#"> <i class="fa fa-plus-square"></i><span>Cadastrar</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>

                    </a>
                    <ul class="treeview-menu">
                        <li class="Medicos"><a href="cadmedico.php"><i class="fa fa-user-md"></i>Medicos</a></li>
                        <li class="Pacientes"><a href="cadpaciente.php"><i class="fa  fa-user-plus"></i>Pacientes</a></li>
                    </ul>
                </li>
            </ul>

        </section>

    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Medico
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">

                <li><a href="telaPrincipal.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
                <li class="active">Cadastro Medico</li>
            </ol>
        </section>
        <section class="content container-fluid">
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-10">
                        <!-- Horizontal Form -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro Medico</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <form class="form-horizontal" method="post" action="../Controller/ControllerRegistros.php">

                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nome Completo</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nome_completo" placeholder="Nome Completo">
                                        </div>
                                        <label class="col-sm-1 control-label">Email</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"  name="email" placeholder="Email">
                                        </div>
                                    </div>

                                    <!-- /CIDADE/ESTADOS -->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Estado</label>
                                        <div class="col-sm-4">

                                            <select class="form-control" name="estados" id="estados" data-placeholder="  Selecione o Estado">
                                                <option value="" ></option>
                                                <?php

                                                while ($row = mysqli_fetch_assoc($con->sellestados) )
                                                {
                                                    echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
                                                }
                                                ?>
                                                </option></select>

                                        </div>
                                        <label  class="col-sm-1 control-label">Cidade</label>
                                        <div class="col-sm-4">

                                            <select  class="form-control" name="cidades" id="cidades">
                                                <option  value="">Escolha um estado</option>
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
                                        <label class="col-sm-2 control-label">Endereco</label>
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
                                            <select class="form-control select2" multiple="multiple" name="especialidades[]" data-placeholder="  Selecione as Especialidade"
                                                    style="width: 100%;">
                                                <option value="" ></option>
                                                <?php

                                                while ($row = mysqli_fetch_assoc($con->sellespec) ) {
                                                    echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
                                                }
                                                ?>
                                            </select>

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
                        </div>
                        </div>

                    </div>



                    <!-- /.box -->
                </div>
                <!--/.col (right) -->


    <footer class="main-footer">

        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

</div>




<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->


<!-- MASCARA CPF, CRM, CELULARES, ETC
<script type="text/javascript" src="../jss/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../jss/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="../jss/jquery.validate.min.js"></script>
<script type="text/javascript" src="../jss/jquery.zebra-datepicker.js"></script>
-->
<!-- jQuery 3 -->
<script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../bootstrap/dist/js/adminlte.min.js"></script>




<!-- Select2 -->
<script src="../bootstrap/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../bootstrap/plugins/input-mask/jquery.inputmask.js"></script>
<script src="../bootstrap/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../bootstrap/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../bootstrap/bower_components/moment/min/moment.min.js"></script>
<script src="../bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../bootstrap/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../bootstrap/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../bootstrap/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../bootstrap/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../bootstrap/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->


<!-- AdminLTE for demo purposes -->
<script src="../bootstrap/dist/js/demo.js"></script>
<!-- Page script -->
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>

</body>
</html>