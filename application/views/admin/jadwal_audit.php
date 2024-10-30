<div class="container-fluid">

    <div class="mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Jadwal Audit</h6>
            </div>
            <div class="card-body">

                <a href="" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#databaru"><i class="fas fa-fw fa-plus-square"></i> Tambah Jadwal</a>
                <form method="post" action="<?php echo base_url('instansi/update_sndikti'); ?>">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="1600px">
                            <thead align="center">
                                <tr>
                                    <th>No</th>
                                    <th>Siklus</th>
                                    <th>Jadwal Audit</th>
                                    <th>Keterangan</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($jadwal_audit as $jadwal) :
                                ?>
                                    <tr align="justify">
                                        <td><?= $i++; ?></td>
                                        <input type="hidden" name="id[]" value="<?= $jadwal['id'] ?>">
                                        <td><?= $jadwal['siklus'] ?></td>
                                        <td><?= $jadwal['jadwal'] ?></td>
                                        <td><?= $jadwal['keterangan'] ?></td>
                                        <td><?php echo anchor('admin/edit_jadwal_audit/' . $jadwal['id'], ('<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')); ?></td>
                                        <td>
                                            <div onclick="javascript: return confirm('Anda yakin ingin menghapus data ini ?')"><?php echo anchor('admin/hapus_jadwal_audit/' . $jadwal['id'], ('<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')); ?></div>
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
                <h5 class="modal-title" id="DataBaru">Tambah Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('admin/tambah_jadwal_audit'); ?>" method="POST" class="needs-validation" novalidate>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="invalid-feedback>">
                            Tanggal
                        </div>
                        <input type="date" class="form-control mb-2" name="jadwal" id="jadwal" placeholder="" required>
                        <div class="invalid-feedback>">
                            Siklus
                        </div>
                        <select class="form-control mb-2" name="siklus" id="siklus">
                            <option value="2024">2024</option>
                            <option value="2025" selected>2025</option>
                        </select>
                    </div>
                    <div class="invalid-feedback>">
                        Keterangan
                    </div>
                    <input type="text" class="form-control mb-2" name="keterangan" id="keterangan" placeholder="-">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>