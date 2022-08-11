<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>TAMAN IDE POS</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />

  <!-- ================== BEGIN core-css ================== -->
  <link rel="icon" href="<?= base_url('assets/img/logo/logo.jpeg') ?>" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/vendor.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/default/app.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" />
  <!-- ================== END core-css ================== -->

  <!-- ================== BEGIN page-css ================== -->
  <link href="<?= base_url(); ?>assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/simple-calendar/dist/simple-calendar.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/select2/dist/css/select2.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/plugins/select2/dist/css/select2-bootstrap.min.css" rel="stylesheet" />
  <!-- ================== END page-css ================== -->
  <style>
    .bg-process {
      position: fixed;
      z-index: 9999;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, .6);
    }

    .bg-process .spinner-border {
      width: 4rem;
      height: 4rem;
      border-width: 5px;
    }
  </style>
</head>

<body>
  <!-- BEGIN #loader -->
  <div id="loader" class="app-loader">
    <span class="spinner"></span>
  </div>
  <!-- END #loader -->

  <!-- Spinner after Form Insert -->
  <div class="bg-process d-flex justify-content-center" style="display: none !important;">
    <div class="spinner-border text-light align-self-center" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <!-- BEGIN #app -->
  <div id="app" class="app app-header-fixed app-sidebar-fixed">
    <!-- BEGIN #header -->
    <div id="header" class="app-header">
      <!-- BEGIN navbar-header -->
      <div class="navbar-header">
        <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>TAMAN IDE </b> POS</a>
        <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <!-- END navbar-header -->
      <!-- BEGIN header-nav -->
      <div class="navbar-nav">
        <div class="navbar-item navbar-user dropdown">
          <a href="<?= base_url('login/logout'); ?>" class="btn-logout dropdown-item" data-redurl="<?= base_url('login'); ?>"><b>Log Out</b></a>
        </div>
      </div>
      <!-- END header-nav -->
    </div>
    <!-- END #header -->

    <?php $this->load->view('templates/sidebar'); ?>
    <div class="app-sidebar-bg"></div>
    <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
    <!-- END #sidebar -->

    <!-- BEGIN #content -->
    <div id="content" class="app-content">