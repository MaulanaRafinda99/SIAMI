<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Instansi</h6>
        </div>
        <div class="card-body">
            <?php
            foreach ($instansi as $in) {
            ?>

                <form method="post" action="<?php echo base_url('admin/update_instansi'); ?>">
                    <div class="form-group">
                        <label>Nama Instansi</label>
                        <input type="hidden" name="id_instansi" value="<?php echo $in->id_instansi; ?>">
                        <input type="hidden" name="id_jenis_instansi" value="<?php echo $in->id_jenis_instansi; ?>">
                        <input type="text" name="nama_instansi" class="form-control" placeholder="instansi" value="<?php echo $in->nama_instansi; ?>">
                        <br>
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" value="<?php echo $in->deskripsi; ?>">
                        <br>
                    </div>
                    <button type="reset" class="btn btn-denger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            <?php } ?>
        </div>
    </div>
</div>