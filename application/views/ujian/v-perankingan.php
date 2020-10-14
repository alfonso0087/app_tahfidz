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
              <form action="<?= base_url('ujian/hasil_ujian/perankingan'); ?>">
                <div class="form-group">
                  <label for="kelas">Pilih Kelas</label>
                  <select name="kelas" class="form-control">
                    <option value=""> -- Pilih Kelas -- </option>
                    <?php foreach ($kelas as $kls) : ?>
                      <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="periodeujian">Pilih Periode Ujian</label>
                  <select name="periodeujian" class="form-control">
                    <option value=""> -- Pilih Periode Ujian -- </option>
                    <?php foreach ($periode_ujian as $p_ujian) : ?>
                      <option value="<?= $p_ujian['IdPeriodeUjian']; ?>"><?= $p_ujian['Periode']; ?>|<?= $p_ujian['Semester']; ?>|<?= $p_ujian['NamaKelas']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="pull-right">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-users"></i> Tampil Perankingan</button>
                    </div>
                  </div>
                </div>
              </form>
              <hr>

              <table class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Santri</th>
                    <th>Kelas</th>
                    <th>Periode</th>
                    <th>Rata-Rata</th>
                    <th>Reward</th>
                    <th>Ranking</th>
                  </tr>
                </thead>
                <tbody>
                  <form action="<?= base_url('ujian/hasil_ujian/proses_perankingan'); ?>" method="POST">

                    <?php
                    $no = 1;
                    if ($ranking_santri)
                      foreach ($ranking_santri as $rs) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $rs['NamaLengkap']; ?></td>
                        <td><?= $rs['NamaKelas']; ?></td>
                        <td><?= $rs['Periode']; ?></td>
                        <td><?= $rs['Rata-rata']; ?></td>
                        <td><?= $rs['Reward']; ?></td>
                        <td><?= $rs['Ranking']; ?></td>
                      </tr>
                      <input type="hidden" name="IdHasil[]" value="<?= $rs['IdHasil']; ?>">
                      <input type="hidden" name="IdSiswa[]" value="<?= $rs['IdSiswa']; ?>">
                      <input type="hidden" name="IdPeriodeUjian[]" value="<?= $rs['IdPeriodeUjian']; ?>">
                      <input type="hidden" name="TotalNilai[]" value="<?= $rs['Total']; ?>">
                      <input type="hidden" name="RataRata[]" value="<?= $rs['Rata-rata']; ?>">
                      <input type="hidden" name="Reward[]" value="<?= $rs['Reward']; ?>">
                      <input type="hidden" name="Ranking[]" value="<?= $rs['Ranking']; ?>">
                    <?php endforeach; ?>

                </tbody>

              </table>

              <br>
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fas fa-users"></i> Proses Perankingan</button>
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