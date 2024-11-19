<!-- Sidebar -->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" conte\
  nt="">

  <title>SIAMI - Sistem Informasi Audit Mutu Internal</title>

  <!-- Custom fonts for this template -->
  <link href="<?= base_url('asset/vendor/fontawesome-free/css/') ?>all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('asset/css/') ?>sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?= base_url('asset/vendor/datatables/') ?>dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../assets/css/logo_utu.png" />

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <?php
  $level_id = $this->session->userdata('level');
  $queryLevel = "SELECT level
                FROM user_level
                WHERE user_level.id = $level_id
                ";
  $hasL = $this->db->query($queryLevel)->result_array();
  ?>

  <!-- Sidebar - Brand -->
  <?php foreach ($hasL as $hL) : ?>
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url($hL['level']); ?>">
    <?php endforeach; ?>
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">
      <img src="../assets/img/brand/Nvas(2).png" style="width: 100%" alt="brand">
    </div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Query menu -->
    <li class="nav-item">
      <a class="nav-link pb-2" href="<?= base_url("admin") ?>"><i class="fas fa-fw fa-table"></i>Dashboard</a>
    </li>
    <hr class="sidebar-divider mb-3">


    <div class="sidebar-heading">
      Data AMI
    </div>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link pb-0" href="<?= base_url("admin/data_Ami") ?>"><i class="fas fa-fw fa-table"></i>Data AMI</a>
      <a class="nav-link pb-0" href="<?= base_url("admin/jadwal_audit") ?>"><i class="fas fa-fw fa-table"></i>Atur Jadwal Audit</a>
      <a class="nav-link pb-0" href="<?= base_url("admin/komponen_sndikti") ?>"><i class="fas fa-fw fa-table"></i>Komponen SNDIKTI</a>
    </li>

    <hr class="sidebar-divider mt-3">
    <div class="sidebar-heading">
      User
    </div>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link pb-0" href="<?= base_url("admin/manajemen_user") ?>"><i class="fas fa-fw fa-user-tie"></i>Manajemen User</a>
      <a class="nav-link pb-0" href="<?= base_url("admin/manajemen_akses") ?>"><i class="fas fa-fw fa-user-tie"></i>Akses Instansi</a>
      <a class="nav-link pb-0" href="<?= base_url("admin/manajemen_asesor") ?>"><i class="fas fa-fw fa-user-tie"></i>Atur Asesor</a>
      <a class="nav-link pb-0" href="<?= base_url("admin/data_instansi") ?>"><i class="fas fa-fw fa-table"></i>Data Instansi</a>
    </li>


    <hr class="sidebar-divider mt-3">
    <!-- Profil Saya -->
    <li class="nav-item">
      <a class="nav-link out" href="<?= base_url('auth/logout'); ?>">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Search -->
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">1+</span>
          </a>
          <!-- Dropdown - Alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
              Alerts Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-primary">
                  <i class="fas fa-file-alt text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">March 06, 2020</div>
                <span class="font-weight-bold">New Project Sistem Audit Mutu Internal Update!</span>
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
          </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">1</span>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
              Message Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                <div class="status-indicator bg-success"></div>
              </div>
              <div class="font-weight-bold">
                <div class="text-truncate">Welcome to the website Sistem Audit Mutu Internal.</div>
                <div class="small text-gray-500">ZeroDev · 1m</div>
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
          </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
            </span>
            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/') . 'default.jpg'; ?>">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
    <!-- Page Heading -->

    <div class="row">

        <!-- <?php if ($this->session->flashdata('pesan')) : ?>
		<?php endif; ?> -->
        <div class="col-lg-6">
            <div class="alert alert-success" role="alert">
                Username : <?= $instansi['nama_instansi']; ?>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Akses</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $m['username']; ?></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= cek_akses($instansi['id_instansi'], $m['id_user']); ?> data-instansi="<?= $instansi['id_instansi']; ?>" data-id_user="<?= $m['id_user']; ?>">
                                </div>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->