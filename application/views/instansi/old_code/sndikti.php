<div class="container-fluid">

  <div class="mb-4">

    <!-- Illustrations -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">SNDIKTI</h6>
      </div>
      <div class="card-body">
        <div class="alert alert-primary" role="alert">
          <?php foreach ($instansi as $inn) : ?>
            <b>Formulir Pengisian Data Instrumen</b> <br>
            Instansi: <?= $inn['nama_instansi']; ?><br>
            Siklus: <?= $kode_siklus; ?>
          <?php endforeach; ?>
        </div>
        <form method="post" action="<?php echo base_url('instansi/update_sndikti'); ?>">
          <div class="table-responsive">
            <table class="table table-bordered" width="1600px" cellspacing="0">
              <thead align="center" class="thead-dark">
                <tr>
                  <th>No</th>
                  <th>SNDIKTI</th>
                  <th>IKU SNDIKTI</th>
                  <th>Link Dokumen</th>
                  <th>Lihat</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($sndikti as $snd) :
                ?>
                  <tr align="center">
                    <td><?= $i++; ?></td>
                    <input type="hidden" name="id[]" value="<?= $snd['id_transaksi'] ?>">
                    <td align="justify"><?= $snd['sndikti'] ?></td>
                    <td align="justify"><?= $snd['iku_sndikti'] ?></td>
                    <td><textarea name="link[]" class="form-control"><?= $snd['link'] ?></textarea></td>
                    <!-- Add target blank -->
                    <td><a href="<?= $snd['link'] ?>" target = "_blank">Lihat</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>