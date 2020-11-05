<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <div class="content mt-2">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-sm">
          <div class="card">
            <div class="card-header bg-success">
              <h4 class="m-0" style="color: white;"><?= $title; ?></h4>
            </div>
            <div class="card-body">
              <?= $this->session->flashdata('pesan'); ?>

              <form action="<?= base_url('Wali/preview'); ?>" method="POST">
                <input type="hidden" name="IdSiswa" value="<?= $user['IdSiswa']; ?>">
                <input type="hidden" name="IdKelas" value="<?= $user['IdKelas']; ?>">

                <div class="form-group">
                  <label for="">Pilih Periode Ujian <small class="text-danger">
                      (Pilih Sesuai Kelas Santri)
                    </small></label>
                  <select name="periode_ujian" id="periode_ujian" class="form-control">
                    <option value=""> -- Pilih Periode Ujian -- </option>
                    <?php foreach ($periode_ujian as $pu) : ?>
                      <option value="<?= $pu['IdPeriodeUjian']; ?>"><?= $pu['Periode']; ?> | <?= $pu['KetPeriode']; ?> | <?= $pu['NamaKelas']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="pull-right">
                  <button type="submit" id="tampil_raport" class="btn btn-primary"><i class="far fa-fw fa-file-pdf"></i>Tampil Raport</button>
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