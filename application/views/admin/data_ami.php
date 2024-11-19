
<!-- End of Sidebar -->
<div class="container-fluid">

    <div class="mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data AMI</h6>
            </div>
            <div class="card-body">
                <div class="tambah_data">
                    <a href="" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#databaru"><i class="fas fa-fw fa-plus-square"></i> Tambah Data</a>
                </div>
                <form method="post" action="<?php echo base_url('admin/data_ami'); ?>">
                    <table align="left" class="mb-3">
                        <tr>
                            <td align="right">Instansi:</td>
                            <td>
                                <select name="id_instansi" id="id_instansi" class="custom-select custom-select-sm">
                                    <?php
                                    foreach ($instansi as $in) :
                                        $selected = ($in['id_instansi'] == $this->input->post('id_instansi')) ? 'selected' : '';
                                    ?>
                                        <option value="<?= $in['id_instansi'] ?>" class="dropdown-item" <?= $selected ?>><?= $in['nama_instansi'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td>&nbsp;</td>
                            <td align="right">Siklus:</td>
                            <td>
                                <select name="id_siklus" id="id_siklus" class="custom-select custom-select-sm">
                                    <?php
                                    foreach ($siklus as $si) :
                                        $selected = ($si['id_siklus'] == $this->input->post('id_siklus')) ? 'selected' : '';
                                    ?>
                                        <option value="<?= $si['id_siklus'] ?>" class="dropdown-item" <?= $selected ?>><?= $si['tahun'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td>&nbsp;</td>
                            <td>
                                <button type="submit" class="btn btn-info">Pilih</button>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </form>


                <div class="table-responsive">
                    <table class="table table-bordered" width="1600px" cellspacing="0">
                        <thead align="center">
                            <tr>
                                <th>No</th>
                                <th>Siklus</th>
                                <th>Jadwal</th>
                                <th>Nama Instansi</th>
                                <th>SNDIKTI</th>
                                <th>IKU SNDIKTI</th>
                                <th>Link Dokumen</th>
                                <th>Bobot</th>
                                <th>Komentar</th>
                                <th rowspan="2" colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($data_ami as $ami) :
                            ?>
                                <tr align="center">
                                    <td><?= $i++; ?></td>
                                    <input type="hidden" name="id[]" value="<?= $ami['id_transaksi'] ?>">
                                    <td><span class="badge badge-info">Siklus <?= $ami['kode_siklus'] ?></span></td>
                                    <td><?= $ami['jadwal'] ?></td>
                                    <td><?= $ami['nama_instansi'] ?></td>
                                    <td align="justify"><?= $ami['sndikti'] ?></td>
                                    <td align="justify"><?= $ami['iku_sndikti'] ?></td>
                                    <td><a href="<?= $ami['link'] ?>" target="_blank">Dokumen</a></td>
                                    <td><?= $ami['bobot'] ?></td>
                                    <td><?= $ami['komentar'] ?></td>
                                    <td><?php echo anchor('admin/edit_data_ami/' . $ami['id_transaksi'], ('<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')); ?></td>
                                    <td>
                                        <div onclick="javascript: return confirm('Anda yakin ingin menghapus data ini ?')"><?php echo anchor('admin/hapus_data_ami/' . $ami['id_transaksi'], ('<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')); ?></div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</div>
<div class="modal fade" id="databaru" tabindex="-1" role="dialog" aria-labelledby="DataBaru" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DataBaru">Tambah Data Audit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('admin/tambah_data_ami'); ?>" method="POST" class="needs-validation" novalidate>
                <div class="modal-body">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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