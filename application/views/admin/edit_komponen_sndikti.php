<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Audit Mutu Internal UTU</h6>
        </div>
        <div class="card-body">
            <?php
            foreach ($komponen_sndikti as $snd) {
            ?>

                <form method="post" action="<?php echo base_url('admin/update_komponen_sndikti'); ?>">
                    <div class="form-group">
                        <label>SNDIKTI</label>
                        <input type="hidden" name="id_sndikti" value="<?php echo $snd->id_sndikti; ?>">
                        <input type="text" name="sndikti" class="form-control" placeholder="SNDIKTI" value="<?php echo $snd->sndikti; ?>">
                        <br>
                        <label>IKU SNDIKTI</label>
                        <input type="text" name="iku_sndikti" class="form-control" placeholder="IKU SNDIKTI" value="<?php echo $snd->iku_sndikti; ?>">
                        <br>
                        <label>Jadwal Audit</label>
                        <?php if (!empty($jadwal_audit)): ?>
                            <select class="form-control" name="jadwal" id="jadwal">
                                <?php foreach ($jadwal_audit as $jadwal): ?>
                                    <option value="<?php echo $jadwal['jadwal']; ?>"><?php echo $jadwal['jadwal']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php else: ?>
                            <p>Tidak ada jadwal audit yang tersedia.</p>
                        <?php endif; ?>
                    </div>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            <?php } ?>
        </div>
    </div>
</div>