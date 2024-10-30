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