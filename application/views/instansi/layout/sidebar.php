<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->

  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('instansi'); ?>">

    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SIAMI UTU<sup>1.0</sup></div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Query menu -->
  <div class="sidebar-heading">
    Data AMI
  </div>
  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link pb-0" href="<?= base_url("instansi") ?>"><i class="fas fa-fw fa-home"></i>Beranda</a>
    <a class="nav-link pb-0" href="<?= base_url("instansi/sndikti") ?>"><i class="fas fa-fw fa-table"></i>Instrumen IKU</a>
  </li>
  <hr class="sidebar-divider mt-3">
  <div class="sidebar-heading mt-3">
    Pengguna
  </div>
  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link pb-0" href="<?= base_url("instansi") ?>"><i class="fas fa-fw fa-home"></i>Identitas Prodi</a>
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