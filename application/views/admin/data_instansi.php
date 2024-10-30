<div class="container-fluid">

    <div class="mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Instansi</h6>
            </div>
            <div class="card-body">

                <a href="" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#databaru"><i class="fas fa-fw fa-plus-square"></i> Tambah Data</a>
                <form method="post" action="<?php echo base_url('instansi/update_sndikti'); ?>">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="1600px" cellspacing="0">
                            <thead align="center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Instansi</th>
                                    <th>Deskripsi</th>
                                    <th rowspan="2" colspan="2">Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($instansi as $in) :
                                ?>
                                    <tr align="justify">
                                        <td align="center"><?= $i++; ?></td>
                                        <input type="hidden" name="id[]" value="<?= $in['id_instansi'] ?>">
                                        <td><?= $in['nama_instansi'] ?></td>
                                        <td><?= $in['deskripsi'] ?></td>
                                        <td align="center"><?php echo anchor('admin/edit_instansi/' . $in['id_instansi'], ('<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')); ?></td>
                                        <td align="center">
                                            <div onclick="javascript: return confirm('Anda yakin ingin menghapus data ini ?')"><?php echo anchor('admin/hapus_instansi/' . $in['id_instansi'], ('<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')); ?></div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>


<div class="modal fade" id="databaru" tabindex="-1" role="dialog" aria-labelledby="DataBaru" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DataBaru">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('admin/tambah_instansi'); ?>" method="POST" class="needs-validation" novalidate>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="invalid-feedback>">
                            <b>Jenis Instansi</b> <br>(1. Prodi | 2. Biro Keuangan | 3. Biro AKPK | 4. LPPM)
                        </div>
                        <input type="number" class="form-control mb-2" name="id_jenis_instansi" id="id_jenis_instansi" placeholder="1" required>
                        <div class="invalid-feedback>">
                            Nama Instansi
                        </div>
                        <input type="text" class="form-control mb-2" name="nama_instansi" id="nama_instansi" placeholder="" required>
                        <div class="invalid-feedback>">
                            Deskripsi Instansi
                        </div>
                        <input type="text" class="form-control mb-2" name="deskripsi" id="deskripsi" placeholder="" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>