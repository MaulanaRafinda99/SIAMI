<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
    <!-- Page Heading -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manajemen Akses</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <?= form_error('level', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Level</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($user as $ak) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td scope="row"><?= $ak['username']; ?></td>
                                    <td><?= $ak['level']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/editakses/') . $ak['id_user']; ?>" class="btn btn-success btn-sm delete"><i class="fa fa-fw fa-user-check"></i> Akses</a>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="levelBaru" tabindex="-1" role="dialog" aria-labelledby="levelBaruLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="levelBaruLabel">Tambah Level Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('administrator/level'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="level" id="level" placeholder="Level baru">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>

        </div>
    </div>
</div>