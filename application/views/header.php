<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>template/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>template/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <div class="logo" style="height: 50px;">
      <center>
        <img src="<?php echo base_url(); ?>template/dist/img/grupososasrl.jpg" class="img-responsive" style=" padding-top:2px;">
      </center>
    </div>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">MENÚ</li>
        <li>
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-cogs" aria-hidden="true"></i> <span>Inicio</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-cubes" aria-hidden="true"></i> <span>Almacen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>category"><i class="fa fa-check-circle" aria-hidden="true"></i> Categoría</a></li>
            <li><a href="<?php echo base_url(); ?>presentation"><i class="fa fa-check-circle" aria-hidden="true"></i> Presentación</a></li>
            <li><a href="<?php echo base_url(); ?>brand"><i class="fa fa-check-circle" aria-hidden="true"></i> Marca</a></li>
            <li><a href="<?php echo base_url(); ?>product"><i class="fa fa-check-circle" aria-hidden="true"></i> Producto</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-shopping-cart" aria-hidden="true"> </i><span>Compras</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>supplier"><i class="fa fa-check-circle" aria-hidden="true"></i> Proveedor</a></li>
            <li><a href="<?php echo base_url(); ?>buy"><i class="fa fa-check-circle" aria-hidden="true"></i> Compras</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-line-chart" aria-hidden="true"></i> <span>Ventas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Inventarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>category"><i class="fa fa-check-circle" aria-hidden="true"></i> Inventario Inicial</a></li>
            <li><a href="<?php echo base_url(); ?>presentation"><i class="fa fa-check-circle" aria-hidden="true"></i> Abrir Nuevo Inventario</a></li>
            <li><a href="<?php echo base_url(); ?>brand"><i class="fa fa-check-circle" aria-hidden="true"></i> Saldos y Movimientos</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>