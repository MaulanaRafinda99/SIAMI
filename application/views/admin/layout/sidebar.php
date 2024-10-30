<!-- Sidebar -->
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
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">AMI UTU<sup>1.0</sup></div>
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
<!-- End of Sidebar -->