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
    <!--<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>-->

    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manajemen User</h6>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md">
                    <nav class="navbar navbar-light bg-light">
                        <?php
                        if ($keyword == null) {
                            echo '<a class="navbar-brand">Total : ' . $total_rows . '</a>';
                        } else {
                            echo '<a class="navbar-brand">Hasil Pencarian : ' . $total_rows . '</a>';
                        }
                        ?>

                        <form class="form-inline" action="<?= base_url('admin/manajemen_user'); ?>" method="post">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search Name" name="keyword" autocomplete="off" autofocus>
                            <input type="submit" class="btn btn-primary" name="submit" value="Search">

                        </form>
                    </nav>
                </div>
            </div>
            <a href="" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#userBaru"><i class="fas fa-fw fa-plus-square"></i> Tambah User</a>
            <div class="row">
                <div class="col-md">
                    <table class="table table-hover" id="perus">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Level</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($users)) : ?>
                                <tr>
                                    <td colspan="12">
                                        <div class="alert alert-danger" role="alert">
                                            Data not found!
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                            <?php foreach ($users as $u) : ?>
                                <tr>
                                    <th scope="row"><?= ++$start; ?></th>
                                    <td><?= $u['username']; ?></td>
                                    <td><?= $u['level']; ?></td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#Edit_akun<?= $u['id_user'] ?>" class="btn btn-success btn-sm"><i class="fa fa-fw fa-edit"></i>Edit</a>
                                        <a href="<?= base_url() . 'admin/hapus_akun/' . $u['id_user'] ?>" data-nama="<?= $u['username']; ?>" class="btn btn-danger btn-sm deleteU"><i class="fa fa-fw fa-trash"></i>Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $this->pagination->create_links(); ?>

                </div>

            </div>
            <!-- End Data Table -->

        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->

<?php foreach ($users as $u) :
?>

    <!-- Modal Edit -->
    <div class="modal fade" id="Edit_akun<?= $u['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="pelamarEditLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pelamarEditLabel">Edit Data Pelamar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/edit_akun/' . $u['id_user']); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="hidden" name="id_user" value="<?= $u['id_user'] ?>">
                            <input type="text" class="form-control" id="username" name="username" value="<?= $u['username']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">Password</label>
                            <input type="password" class="form-control cekkarakter1 req1" name="password" id="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select name="level" id="level" class="form-control">

                                <?php foreach ($level as $l) {
                                    if ($u['level_id'] == $l['id']) {
                                        echo "<option value='$l[id]' selected>$l[level]</option>";
                                    } else {
                                        echo "<option value='$l[id]'>$l[level]</option>";
                                    }
                                }
                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>

<!-- Modal Tambah User -->
<div class="modal fade" id="userBaru" tabindex="-1" role="dialog" aria-labelledby="userBaruLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userBaruLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('admin/tambah_akun'); ?>" method="POST" class="needs-validation" novalidate>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control cekkarakter req" name="username" id="username" placeholder="Username" required>
                        <div class="invalid-feedback">
                            Masukan Username
                        </div>
                    </div>
                    <!-- <div class="form-group">
						<input type="text" class="form-control" name="email" id="email" placeholder="Email User">
					</div> -->
                    <div class="form-group">
                        <input type="password" class="form-control cekkarakter1 req1" name="password" id="password" placeholder="Password" required>
                        <div class="invalid-feedback">
                            Masukan Password
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="level" id="level" class="form-control" required>
                            <option disabled="disabled" selected>- Pilih Level -</option>
                            <?php foreach ($level as $l) : ?>
                                <option value="<?= $l['id']; ?>"><?= $l['level']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>

        </div>
    </div>
</div>