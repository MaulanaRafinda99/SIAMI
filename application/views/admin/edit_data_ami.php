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
  <link rel="shortcut icon" href="../../assets/css/logo_utu.png" />

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
      <img src="../../assets/img/brand/Nvas(2).png" style="width: 100%" alt="brand">
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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Audit Mutu Internal UTU</h6>
        </div>
        <div class="card-body">
            <?php
            foreach ($data_ami as $ami) {
            ?>
                <form method="post" action="<?php echo base_url('admin/update_data_ami'); ?>">
                    <input type="hidden" name="id_transaksi" value="<?php echo $ami->id_transaksi; ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <!-- Tampilkan pilihan data siklus yang tersedia -->
                            <?php if (!empty($siklus)): ?>
                                <label for="siklus" class="btn btn-info">Siklus</label>
                                <select class="form-control mb-1" name="id_siklus" id="id_siklus_selected">
                                    <?php foreach ($siklus as $sks): ?>
                                        <option value="<?php echo $sks['id_siklus']; ?>"><?php echo $sks['id_siklus']; ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <label for="kode_siklus">Kode Siklus</label>
                                <select class="form-control mb-1" name="kode_siklus" id="kode_siklus">
                                    <!--  -->
                                </select>

                                <label for="tahun">Tahun</label>
                                <select class="form-control mb-1" name="tahun" id="tahun">
                                    <!--  -->
                                </select>

                            <?php else: ?>
                                <p>Tidak ada data yang tersedia.</p>
                            <?php endif; ?>

                            <!-- Tampilkan pilihan data Jadwal yang tersedia -->
                            <br>
                            <?php if (!empty($jadwal_audit)): ?>
                                <label for="jadwal" class="btn btn-info">Jadwal</label>
                                <select class="form-control mb-1" name="jadwal" id="jadwal">
                                    <?php foreach ($jadwal_audit as $jadwal): ?>
                                        <option value="<?php echo $jadwal['jadwal']; ?>"><?php echo $jadwal['jadwal']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            <?php else: ?>
                                <p>Tidak ada jadwal audit yang tersedia.</p>
                            <?php endif; ?>

                            <!-- Tampilkan pilihan data Instansi yang tersedia -->
                            <br>
                            <?php if (!empty($instansi)): ?>
                                <label for="id_instansi" class="btn btn-info">Instansi</label>
                                <select class="form-control mb-1" name="id_instansi" id="id_instansi_selected">
                                    <?php foreach ($instansi as $int): ?>
                                        <option value="<?php echo $int['id_instansi']; ?>"><?php echo $int['id_instansi']; ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <label for="nama_instansi">Nama Instansi</label>
                                <select class="form-control mb-1" name="nama_instansi" id="nama_instansi">
                                    <!-- -->
                                </select>

                            <?php else: ?>
                                <p>Tidak ada data yang tersedia.</p>
                            <?php endif; ?>

                            <!-- Tampilkan pilihan data SNDIKTI & IKU SNDIKTI yang tersedia -->
                            <br>
                            <?php if (!empty($sndikti)): ?>
                                <label for="id_sndikti" class="btn btn-info">SNDIKTI</label>
                                <select class="form-control mb-1" name="id_sndikti" id="id_sndikti_selected">
                                    <?php foreach ($sndikti as $int): ?>
                                        <option value="<?php echo $int['id_sndikti']; ?>"><?php echo $int['id_sndikti']; ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <label for="SNDIKTI">SNDIKTI</label>
                                <select class="form-control mb-1" name="sndikti" id="sndikti">
                                    <!--  -->
                                </select>

                                <label for="iku_sndikti">IKU SNDIKTI</label>
                                <select class="form-control mb-1" name="iku_sndikti" id="iku_sndikti">
                                    <!--  -->
                                </select>
                            <?php else: ?>
                                <p>Tidak ada data yang tersedia.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <a href="../data_ami.php">
                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </a>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            <?php } ?>
        </div>
    </div>
</div>

<script>
    const siklusData = <?php echo json_encode($siklus); ?>;
    const instansiData = <?php echo json_encode($instansi); ?>;
    const sndiktiData = <?php echo json_encode($sndikti); ?>;

    const idSiklusSelect = document.getElementById('id_siklus_selected');
    const kodeSiklusSelect = document.getElementById('kode_siklus');
    const tahunSelect = document.getElementById('tahun');

    // Ambil data Siklus sesuai dengan ID yang dipilih
    idSiklusSelect.addEventListener('change', function() {
        const selectedId = this.value;

        kodeSiklusSelect.innerHTML = '';
        tahunSelect.innerHTML = '';

        siklusData.forEach(function(siklus) {
            if (siklus.id_siklus === selectedId) {
                const kodeOption = document.createElement('option');
                kodeOption.value = siklus.kode_siklus;
                kodeOption.textContent = siklus.kode_siklus;
                kodeSiklusSelect.appendChild(kodeOption);

                const tahunOption = document.createElement('option');
                tahunOption.value = siklus.tahun;
                tahunOption.textContent = siklus.tahun;
                tahunSelect.appendChild(tahunOption);
            }
        });
    });

    // Ambil data Instansi sesuai dengan ID yang dipilih
    const idInstansiSelect = document.getElementById('id_instansi_selected');
    const namaInstansiSelect = document.getElementById('nama_instansi');

    idInstansiSelect.addEventListener('change', function() {
        const selectedId = this.value;

        while (namaInstansiSelect.firstChild) {
            namaInstansiSelect.removeChild(namaInstansiSelect.firstChild);
        }

        instansiData.forEach(function(instansi) {
            if (instansi.id_instansi == selectedId) {
                const namaOption = document.createElement('option');
                namaOption.value = instansi.nama_instansi;
                namaOption.textContent = instansi.nama_instansi;
                namaInstansiSelect.appendChild(namaOption);
            }
        });
    });

    // Ambil data SNDIKTI sesuai dengan ID yang dipilih
    const idSndiktiSelect = document.getElementById('id_sndikti_selected');
    const sndiktiSelect = document.getElementById('sndikti');
    const ikuSndiktiSelect = document.getElementById('iku_sndikti');

    idSndiktiSelect.addEventListener('change', function() {
        const selectedId = this.value;

        sndiktiSelect.innerHTML = '';
        ikuSndiktiSelect.innerHTML = '';

        sndiktiData.forEach(function(sndikti) {
            if (sndikti.id_sndikti === selectedId) {
                const sndiktiOption = document.createElement('option');
                sndiktiOption.value = sndikti.sndikti;
                sndiktiOption.textContent = sndikti.sndikti;
                sndiktiSelect.appendChild(sndiktiOption);

                const ikuOption = document.createElement('option');
                ikuOption.value = sndikti.iku_sndikti;
                ikuOption.textContent = sndikti.iku_sndikti;
                ikuSndiktiSelect.appendChild(ikuOption);
                no
            }
        });
    });

    idSiklusSelect.dispatchEvent(new Event('change'));
    idInstansiSelect.dispatchEvent(new Event('change'));
    idSndiktiSelect.dispatchEvent(new Event('change'));
</script>