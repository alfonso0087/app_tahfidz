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
              <h4 class="m-0"><?= $title; ?></h4>
            </div>
            <!-- Swall -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Rekap Setoran">
            </div>
            <div class="card-body">

              <form action="<?= base_url('ujian/Hasil_Ujian/form_add'); ?>">
                <!-- Isi Target -->
                <div class="form-group">
                  <label for="santri">Pilih Santri</label>
                  <select name="santri" class="form-control" onchange="cek_kelas()">
                    <option value=""> -- Pilih Santri -- </option>
                    <?php foreach ($santri as $san) : ?>
                      <option value="<?= $san['IdSiswa']; ?>"><?= $san['NamaLengkap']; ?> | <?= $san['NamaKelas']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="periodeujian">Pilih Periode Ujian</label>
                  <select name="periodeujian" class="form-control" onchange="cek_kelas()">
                    <option value=""> -- Pilih Periode Ujian -- </option>
                    <?php foreach ($periode_ujian as $p_ujian) : ?>
                      <option value="<?= $p_ujian['IdPeriodeUjian']; ?>"><?= $p_ujian['Periode']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="pull-right">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-users"></i> Proses Nilai</button>
                    </div>
                  </div>
                </div>
                <hr>


              </form>

              <table class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Santri</th>
                    <th>Kelas</th>
                    <th>Periode</th>
                    <th>Total Nilai</th>
                    <th>Rata-rata</th>
                    <th>Reward</th>
                  </tr>
                </thead>
                <tbody>
                  <form action="<?= base_url('ujian/Hasil_Ujian/aksi_form_add'); ?>" method="POST">

                    <?php
                    $no = 1;
                    if ($data_santri)
                      foreach ($data_santri as $ds) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $ds['NamaLengkap']; ?></td>
                        <td><?= $ds['NamaKelas']; ?></td>
                        <td><?= $ds['Periode']; ?></td>
                        <td><?= $ds['TotalNilai']; ?></td>
                        <td><?= $ds['rata_rata']; ?></td>
                        <?php
                        $reward = '';
                        if ($ds['Nilai'] >= 80 && $ds['Prosentase'] == 100) {
                          $reward = 'PULANG';
                        } else {
                          $reward = 'RIHLAH';
                        }
                        ?>
                        <td><?= $reward; ?></td>
                      </tr>
                      <input type="hidden" name="IdSiswa" value="<?= $ds['IdSiswa']; ?>">
                      <!-- <input type="hidden" name="IdKelas" value="<?= $ds['IdKelas']; ?>"> -->
                      <input type="hidden" name="IdPeriodeUjian" value="<?= $ds['IdPeriodeUjian']; ?>">
                      <input type="hidden" name="TotalNilai" value="<?= $ds['TotalNilai']; ?>">
                      <input type="hidden" name="RataRata" value="<?= $ds['rata_rata']; ?>">
                      <input type="hidden" name="Reward" value="<?= $reward; ?>">
                    <?php endforeach; ?>
                    <!-- <input type="hidden" name="IdSiswa" value="<?= $ds['IdSiswa']; ?>">
                    <input type="hidden" name="idperiodeujian" value="<?= $this->input->get('periodeujian'); ?>"> -->

                </tbody>
              </table>
              <hr>
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fas fa-users"></i> Proses Reward</button>
              </div>

              <hr>

              <!-- <table class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Santri</th>
                    <th>Kelas</th>
                    <th>Periode</th>
                    <th>Total Nilai</th>
                    <th>Rata-Rata</th>
                  </tr>
                </thead>
                <tbody>
                  <form action="<?= base_url('ujian/Hasil_Ujian/proses_nilai'); ?>" method="POST">

                    <?php
                    $no = 1;
                    if ($data_nilai_santri)
                      foreach ($data_nilai_santri as $dns) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $dns['NamaLengkap']; ?></td>
                        <td><?= $dns['NamaKelas']; ?></td>
                        <td><?= $dns['Periode']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                    <input type="hidden" name="IdSiswa" value="<?= $ds['IdSiswa']; ?>">
                    <input type="hidden" name="idperiodeujian" value="<?= $this->input->get('periodeujian'); ?>">

                </tbody>

              </table> -->

              <!-- 
              <div class="form-group row">
                <div class="col-sm-4">
                  <label for="kelas">Batas Lulus/ Jumlah Tugas</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="jml_tugas" id="" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-4">
                  <label for="pekan">Pekan</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="pekan" id="" class="form-control">
                </div>
              </div>

              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fas fa-users"></i> Proses Reward</button>
              </div>



              </form>
              <hr> -->

              <!-- <table class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Santri</th>
                    <th>Jml Tugas</th>
                    <th>Jml Setor</th>
                    <th>Pros</th>
                    <th>Pekan</th>
                    <th>Hasil</th>
                    <th>Reward</th>
                  </tr>
                </thead>
                <tbody>
                  <form action="<?= base_url('halaqoh/rekap_setoran/add'); ?>" method="POST">

                    <?php
                    $no = 1;
                    if (isset($data_setoran))
                      foreach ($data_setoran as $d_setoran) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d_setoran['NamaLengkap']; ?></td>
                        <td><?= $JmlTugas; ?></td>
                        <td><?= $d_setoran['jumlah_setoran']; ?></td>
                        <td><?= prosentase($d_setoran['jumlah_setoran'], $JmlTugas); ?>%</td>
                        <td><?= $PekanRekap; ?></td>
                        <td><?= prosentase($d_setoran['jumlah_setoran'], $JmlTugas) == 100 ? 'Selesai' : 'Tidak Selesai'; ?></td>
                        <td><?= prosentase($d_setoran['jumlah_setoran'], $JmlTugas) == 100 ? 'Reward' : 'Tidak Dapat Reward'; ?></td>
                        <input type="hidden" name="IdSiswa[]" value="<?= $d_setoran['IdSiswa']; ?>">
                        <input type="hidden" name="JmlTugas[]" value="<?= $JmlTugas; ?>">
                        <input type="hidden" name="JmlSetoran[]" value="<?= $d_setoran['jumlah_setoran']; ?>">
                        <input type="hidden" name="PekanRekap[]" value="<?= $PekanRekap; ?>">
                        <input type="hidden" name="Hasil[]" value="<?= prosentase($d_setoran['jumlah_setoran'], $JmlTugas) == 100 ? 'Selesai' : 'Tidak Selesai'; ?>">
                        <input type="hidden" name="Prosentase[]" value="<?= prosentase($d_setoran['jumlah_setoran'], $JmlTugas); ?>">
                        <input type="hidden" name="Reward[]" value="<?= prosentase($d_setoran['jumlah_setoran'], $JmlTugas) == 100 ? 'Reward' : 'Tidak Dapat Reward'; ?>">
                      </tr>



                    <?php endforeach; ?>

                </tbody>


              </table>


              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fas fa-users"></i> Proses Hasil</button>
              </div> -->


              </form>


            </div>
          </div>

        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- <script type="text/javascript">
  function cek_kelas() {
    var kelas = $(this).val();
    alert(kelas);
  }
</script> -->