<?php

include "../Controller/UsuarioController.php";

$con = new UsuarioController();

$con->seleMedico();

$con->selePaciente();

$con->EditAgenda($_REQUEST['cod']);


$mudar = mysqli_fetch_object($con->algoalgo);


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









    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->

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

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="telaPrincipalUsu.php" class="logo">
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
                                    <a href="telaUsuario.php" class="btn btn-default btn-flat">Sair</a>
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
                    <img  src="../img/logo30.png" width="70%" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">

                    <!-- Status -->

                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header"></li>
                <!-- Optionally, you can add icons to the links -->

                <li class="#"><a href="agendamentoUsu.php"><i class="fa fa-medkit"></i> <span>Agendamento</span></a></li>

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
                        <li class="Medicos"><a href="cadMedico.php"><i class="fa fa-user-md"></i>Medicos</a></li>
                        <li class="Pacientes"><a href="cadPaciente.php"><i class="fa  fa-user-plus"></i>Pacientes</a></li>
                    </ul>
                </li>
            </ul>

        </section>

    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Agendamento
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">

                <li><a href="telaPrincipalUsu.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
                <li class="active">Agendamento</li>
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
                        <div class="col-md-1 box box-warning">
                            <div class="box-header">
                            <h3 class="box-title">Agendamento</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" action="../Controller/ControllerRegistros.php">

                            <div class="box-body">

                                <div class="form-group">
   <input type="hidden" value="<?php echo $mudar->id; ?>" name="codatualizar">

                                        <div class="bootstrap-timepicker">
                                        <label class="col-sm-1 control-label">Horas</label>

                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                                <input value="<?php echo $mudar->hora; ?>" name="horagenda" type="text" class="form-control timepicker">
                                            </div>
                                        </div>

                                        <label class="col-sm-2 control-label">Data</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar-check-o"></i>
                                                </div>
                                                <input value="<?php echo $mudar->data_agenda; ?>" type="date" class="form-control" name="dateagenda" id="datapicker">
                                            </div>
                                        </div>
                                    </div>
                                  <br>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Medico</label>
                                    <div class="col-sm-4">
                                        <select class="form-control select2"  name="selmedico" data-placeholder="Selecione o Medico" style="width: 100%;">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($con->algo)){
                                                ?>
                                                <option <?php if ($mudar->medico== $row ['nome_completo']) echo 'selected'; ?> value ="<?php echo $row ['nome_completo']?>">
                                        <?php echo $row ['nome_completo']?> </option>

                                            <?php

                                            }
                                            ?>
                                        </select>
                                    </div>


                                <label class="col-sm-2 control-label">Paciente</label>
                                    <div class="col-sm-4">
                                        <select class="form-control select2" name="selpaciente"  style="width: 100%;">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($con->algodois)){
                                                ?>
                                                <option <?php if ($mudar->paciente== $row ['nome_completo']) echo 'selected'; ?> value ="<?php echo $row ['nome_completo']?>">
                                                    <?php echo $row ['nome_completo']?> </option>

                                                <?php

                                            }
                                            ?>
                                        </select>


                                    </div>
                                </div>
                            </div>

                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-5">
                                <a

                                <button href="exibeagenda.php" type="button" class="btn btn-warning">Voltar</button>

                                </a>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn pull-right btn-warning" data-toggle="modal" data-target="#myModalcad">Editar</button>
                            </div>
                        </div>




                        <div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <button type="button"  class="close" name="botaocad" value="atendimento" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" >&times;</span>
                                        </button>
                                        <h4 class="modal-title text-center" id="myModalLabel">Confirmação Editamento</h4>
                                        <br>
                                        <center><button type="submit"  name="botaocad" value="editagend" class="btn btn-warning ">Confirmar</button></center>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                        </form>
                    </div>
                    </div>
                </div>
            </div>









<footer class="main-footer">

    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.

</footer>

</div>




<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../bootstrap/dist/js/adminlte.min.js"></script>

<!-- MASCARA CPF, CRM, CELULARES, ETC
<script type="text/javascript" src="../jss/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../jss/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="../jss/jquery.validate.min.js"></script>
<script type="text/javascript" src="../jss/jquery.zebra-datepicker.js"></script>
-->

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