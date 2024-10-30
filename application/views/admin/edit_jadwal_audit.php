<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Audit Mutu Internal UTU</h6>
        </div>
        <div class="card-body">
            <?php
            foreach ($jadwal_audit as $jadwal) {
            ?>

                <form method="post" action="<?php echo base_url('admin/update_jadwal_audit'); ?>">
                    <div class="form-group">
                        <label>Siklus</label>
                        <input type="hidden" name="id" value="<?php echo $jadwal->id; ?>">
                        <select class="form-control mb-2" name="siklus" id="siklus">
                            <option value="2024">2024</option>
                            <option value="2025" selected>2025</option>
                        </select>
                        <br>
                        <label>Jadwal Audit</label>
                        <input type="date" name="jadwal" class="form-control" placeholder="Jadwal" value="<?php echo $jadwal->jadwal; ?>">
                        <br>
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $jadwal->keterangan; ?>">
                        <br>
                    </div>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            <?php } ?>
        </div>
    </div>
</div>