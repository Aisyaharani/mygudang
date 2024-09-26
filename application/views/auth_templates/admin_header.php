<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>myGudang|</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('home') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">myGudang</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- Nav Item - Pages Collapse Menu -->
      <?php if (isRole()) : ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('Manageuser') ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manage Supplier</span>
          </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
      <?php endif; ?>
      <?php if (isRole()) : ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('Managedata') ?> ">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Manage Barang</span>
          </a>
        </li>

        <!-- Nav Item - Charts -->
      <?php endif; ?>
      <?php if (isRole()) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('Managetrans') ?> ">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Manage request</span></a>
        </li>
      <?php endif; ?>

      <?php if (isRole()) : ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?= site_url('Manageusername') ?> ">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Manage User</span>
          </a>
        </li>

        <!-- Nav Item - Charts -->
      <?php endif; ?>
      <?php if (isRole()) : ?>
        <li class="nav-item">
          <a href="<?= site_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </a>
        </li>
      <?php endif; ?>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">