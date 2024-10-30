<div class="container-fluid">

  <div class="mb-4">

    <!-- Illustrations -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">SNDIKTI</h6>
      </div>
      <div class="card-body">

        <a href="" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#databaru"><i class="fas fa-fw fa-plus-square"></i> Tambah Data</a>
        <form method="post" action="<?php echo base_url('instansi/update_sndikti'); ?>">
          <div class="table-responsive">
            <table class="table table-bordered" width="1600px" cellspacing="0">
              <thead align="center">
                <tr>
                  <th>No</th>
                  <th>SNDIKTI</th>
                  <th>IKU SNDIKTI</th>
                  <th>Jadwal</th>
                  <th rowspan="2" colspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($komponen_sndikti as $snd) :
                ?>
                  <tr align="justify">
                    <td><?= $i++; ?></td>
                    <input type="hidden" name="id[]" value="<?= $snd['id_sndikti'] ?>">
                    <td><?= $snd['sndikti'] ?></td>
                    <td><?= $snd['iku_sndikti'] ?></td>
                    <td><?= $snd['jadwal'] ?></td>
                    <td><?php echo anchor('admin/edit_komponen_sndikti/' . $snd['id_sndikti'], ('<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')); ?></td>
                    <td>
                      <div onclick="javascript: return confirm('Anda yakin ingin menghapus data ini ?')"><?php echo anchor('admin/hapus_komponen_sndikti/' . $snd['id_sndikti'], ('<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')); ?></div>
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

      <form action="<?= base_url('admin/tambah_komponen_sndikti'); ?>" method="POST" class="needs-validation" novalidate>
        <div class="modal-body">
          <div class="form-group">
            <div class="invalid-feedback>">
              SNDIKTI
            </div>
            <input type="text" class="form-control mb-2" name="sndikti" id="sndikti" placeholder="" required>
            <div class="invalid-feedback>">
              IKU SNDIKTI
            </div>
            <input type="text" class="form-control mb-2" name="iku_sndikti" id="iku_sndikti" placeholder="" required>
            <div class="invalid-feedback>">
              Jadwal Audit
            </div>
            <?php if (!empty($jadwal_audit)): ?>
              <select class="form-control mb-2" name="jadwal" id="jadwal">
                <?php foreach ($jadwal_audit as $jadwal): ?>
                  <option value="<?php echo $jadwal['jadwal']; ?>"><?php echo $jadwal['jadwal']; ?></option>
                <?php endforeach; ?>
              </select>
            <?php else: ?>
              <p>Tidak ada jadwal audit yang tersedia.</p>
            <?php endif; ?>
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