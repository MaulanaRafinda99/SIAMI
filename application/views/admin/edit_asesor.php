<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
    <!-- Page Heading -->

    <div class="row">

        <!-- <?php if ($this->session->flashdata('pesan')) : ?>
		<?php endif; ?> -->
        <div class="col-lg-6">
            <div class="alert alert-success" role="alert">
                Username : <?= $instansi['nama_instansi']; ?>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Akses</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $m['username']; ?></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= cek_akses($instansi['id_instansi'], $m['id_user']); ?> data-instansi="<?= $instansi['id_instansi']; ?>" data-id_user="<?= $m['id_user']; ?>">
                                </div>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->