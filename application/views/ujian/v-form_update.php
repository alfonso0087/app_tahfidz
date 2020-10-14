<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <div class="content mt-2">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-sm">
          <div class="card">
            <div class="card-header" style="background-color: #74b3ce;">
              <h4 class="m-0" style="color: white;"><?= $title; ?></h4>
            </div>
            <div class="card-body">
              <?php foreach ($hasil_ujian as $hu) : ?>
                <form action="<?= base_url('ujian/hasil_ujian/aksi_update'); ?>" method="POST">
                  <input type="hidden" name="IdHasil" value="<?= $hu['IdHasil']; ?>">
                  <div class="form-group">
                    <label for="">Nama Santri</label>
                    <!-- <input type="text" name="nama" class="form-control" id="" value="<?= $hu['IdSiswa']; ?>" readonly> -->
                    <select name="IdSiswa" class="form-control" id="" disabled>
                      <option value="<?= $hu['IdSiswa']; ?>"><?= $hu['NamaLengkap']; ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Periode Ujian</label>
                    <!-- <input type="text" name="periodeujian" class="form-control" value="<?= $hu['IdPeriodeUjian']; ?>" readonly> -->
                    <select name="periodeujian" class="form-control" id="" disabled>
                      <option value="<?= $hu['IdPeriodeUjian']; ?>"><?= $hu['periode']; ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Total Nilai</label>
                    <input type="text" name="totalnilai" class="form-control" value="<?= $hu['Total']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Rata-Rata</label>
                    <input type="text" name="ratarata" class="form-control" value="<?= $hu['Rata-rata']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Reward</label>
                    <input type="text" name="reward" class="form-control" value="<?= $hu['Reward']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="">Ranking</label>
                    <input type="text" name="ranking" class="form-control" value="<?= $hu['Rangking']; ?>" readonly>
                  </div>
                  <a href="<?= base_url('ujian/hasil_ujian'); ?>" class="btn btn-default float-left">Kembali</a>
                  <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->