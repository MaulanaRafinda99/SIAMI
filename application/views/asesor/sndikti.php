<div class="container-fluid">

  <div class="mb-4">

    <!-- Illustrations -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">SNDIKTI</h6>
      </div>
      <div class="card-body">
        <div class="alert alert-success" role="alert">
          <?php foreach ($instansi as $inn) : ?>
            <b>Formulir Penilaian Instrumen</b> <br>
            Instansi: <?= $inn['nama_instansi']; ?><br>
            Siklus: <?= $kode_siklus; ?>
          <?php endforeach; ?>
        </div>
        <form method="post" action="<?php echo base_url('asesor/update_sndikti'); ?>" enctype="multipart/form-data">
          <div class="table-responsive">
            <table class="table table-bordered" width="1600px" cellspacing="0">
              <thead align="center" class="thead-dark">
                <tr>
                  <th>No</th>
                  <th>SNDIKTI</th>
                  <th>IKU SNDIKTI</th>
                  <th>Dokumen</th>
                  <th>Hasil Audit</th>
                  <th>Upload Hasil Audit</th>
                  <th>Bobot</th>
                  <th>Komentar</th>
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
                    <td style="color: #c0392b;">
                      <?php if (!empty($snd['link'])) : ?>
                        <a style="color: #00A65A; font-weight:bold;" href="<?= $snd['link'] ?>" target="_blank">Lihat</a>
                      <?php else : ?>
                        Dokumen Belum Tersedia
                      <?php endif; ?>
                    </td>
                    <td style="color: #00A65A;">
                      <?php if (!empty($snd['file_name'])) : ?>
                        <a target="_blank" style="color: #00A65A; font-weight:bold;" href="<?= $snd['hasil_audit'] ?>"><?= $snd['file_name'] ?></a>
                      <?php else : ?>
                        No file uploaded
                      <?php endif; ?>
                    </td>
                    <td><input type="file" name="file[]" class="form-control-file"></td>
                    <td><textarea name="bobot[]" class="form-control"><?= $snd['bobot'] ?></textarea></td>
                    <td><textarea name="komentar[]" class="form-control"><?= $snd['komentar'] ?></textarea></td>
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