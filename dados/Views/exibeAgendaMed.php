<?php

include "../Controller/UsuarioController.php";

$con = new UsuarioController();

$con->seleEstados();

$con->seleEspec();

$con->seleMedico();

$con->selePaciente();

$con->TabelaMed();

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



    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../bootstrap/dist/css/skins/_all-skins.min.css">
    <title>Prontuário Medico/DevryFacimp</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="stylesheet" href="../bootstrap/dist/css/skins/skin-blue.min.css">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="../bootstrap/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

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
                Tabela Agendamento
                <small></small>
            </h1>
            <ol class="breadcrumb">

                <li><a href="telaPrincipalUsu.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
                <li class="active">Tabela de Agendamento</li>
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
                        <div class="box box-warning">
                            <div class="box-header with-border="">
                            <h3 class="box-title">Tabela Agendamento</h3>
                        </div>
                        <!-- /.box-header -->
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Medico</th>
                                                <th>Paciente</th>
                                                <th>Hora</th>
                                                <th>Data do Agendamento</th>
                                                <th>Ações</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <?php

                                            while ($row = mysqli_fetch_assoc($con->algotres)){

                                                ?>

                                                <tr>


                                                    <td><?php echo   $row['cod_agendamento']; ?></td>
                                                    <td><?php echo $row ["medico"]; ?></td>
                                                    <td><?php echo $row ["paciente"]; ?></td>
                                                    <td><?php echo $row ["hora"]; ?></td>
                                                    <td><?php echo $row ["data_agenda"]; ?></td>


                                                    <td>
                                                        <a href="editAgenda.php?cod=<?php echo $row['cod_agendamento'];?>"
                                                           class="btn btn-success" aria-label="Editar">
                                                            <i class="fa fa-cog fa-spin fa-" aria-hidden="true"></i>
                                                            <span class="sr-only"></span>
                                                        </a>


                                                        <a href="../Controller/ControllerRegistros.php?cod=<?php echo $row['cod_agendamento'];?>&botaocad=apagagend"
                                                           class="btn btn-danger" aria-label="Delete">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>



                                                </tr>
                                            <?php } ?>


                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                    </div>







                            </div>
                    </div>

<footer class="main-footer">

    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.

</footer>



<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bootstrap/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bootstrap/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bootstrap/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bootstrap/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../bootstrap/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../bootstrap/dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
</body>
</html>
