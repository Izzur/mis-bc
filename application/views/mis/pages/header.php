<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard MIS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- CSS -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugin/adminlte/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugin/datatables/datatables.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugin/adminlte/css/AdminLTE.min.css">

  <!-- jQuery 2.2.4 -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>assets/plugin/fastclick/fastclick.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url(); ?>assets/plugin/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url(); ?>assets/plugin/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugin/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- slimscroll -->
  <script src="<?php echo base_url(); ?>assets/plugin/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS 2.1.6 -->
  <script src="<?php echo base_url(); ?>assets/js/Chart.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugin/datatables/datatables.min.js"></script>
  <!-- AdminLTE -->
  <script src="<?php echo base_url(); ?>assets/plugin/adminlte/js/app.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugin/adminlte/js/demo.js"></script>
  <!-- AlaSQL -->
  <script src="<?php echo base_url(); ?>assets/js/alasql.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

<script>
  $(document).ready(function() {
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>Pages/n/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>IS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dashboard</b>MIS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>