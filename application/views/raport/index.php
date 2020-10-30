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
              <h3>Cetak Laporan Ujian Bulanan</h3>

              <form action="<?= base_url('Raport/aksi_tampil'); ?>" method="POST">
                <div class="form-group">
                  <label for="">Pilih Santri</label>
                  <select name="siswa" id="siswa" class="form-control">
                    <option value=""> -- Pilih Santri -- </option>
                    <?php foreach ($santri as $san) : ?>
                      <option value="<?= $san['IdSiswa']; ?>"><?= $san['NamaKelas']; ?> | <?= $san['NamaLengkap']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Pilih Kelas</label>
                  <select name="kelas" id="kelas" class="form-control">
                    <option value=""> -- Pilih Kelas -- </option>
                    <?php foreach ($kelas as $kls) : ?>
                      <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Pilih Periode Ujian</label>
                  <select name="periode_ujian" id="periode_ujian" class="form-control">
                    <option value=""> -- Pilih Periode Ujian -- </option>
                    <?php foreach ($periode_ujian as $pu) : ?>
                      <option value="<?= $pu['IdPeriodeUjian']; ?>"><?= $pu['Periode']; ?> | <?= $pu['KetPeriode']; ?> | <?= $pu['NamaKelas']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="pull-right">
                  <button type="submit" class="btn btn-primary"><i class="far fa-fw fa-file-pdf"></i>Tampil Raport</button>
                </div>
              </form>
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