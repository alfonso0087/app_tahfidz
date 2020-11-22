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

              <form action="<?= base_url('Halaman_Musyrif/form_add_rekap_setoran'); ?>">
                <!-- Isi Target -->
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label for="kelas">Pilih Kelas</label>
                  </div>
                  <div class="col-sm-8">
                    <select name="kelas" class="form-control" onchange="cek_kelas()">
                      <option value=""> -- Pilih Kelas -- </option>
                      <?php foreach ($kelas as $kls) : ?>
                        <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?> | <?= $kls['Tingkat']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="pull-right">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-users"></i> Tampil Santri</button>
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
                  </tr>
                </thead>
                <tbody>
                  <form action="<?= base_url('Halaman_Musyrif/add_hasil_rekap_setoran'); ?>" method="POST">

                    <?php
                    $no = 1;
                    if ($santri)
                      foreach ($santri as $san) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $san['NamaLengkap']; ?></td>
                        <td><?= $san['NamaKelas']; ?></td>
                        <input type="hidden" name="IdSiswa[]" value="<?= $san['IdSiswa']; ?>">
                      </tr>
                    <?php endforeach; ?>
                    <input type="hidden" name="kelas" value="<?= $this->input->get('kelas'); ?>">

                </tbody>

              </table>

              <hr>


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
              <hr>

              <table class="table table-bordered table-striped text-center">
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
                  <form action="<?= base_url('Halaman_Musyrif/add_Rekap_Setoran'); ?>" method="POST">

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
                        <input type="hidden" name="JmlTugas" value="<?= $JmlTugas; ?>">
                        <input type="hidden" name="JmlSetoran[]" value="<?= $d_setoran['jumlah_setoran']; ?>">
                        <input type="hidden" name="PekanRekap" value="<?= $PekanRekap; ?>">
                        <input type="hidden" name="Hasil[]" value="<?= prosentase($d_setoran['jumlah_setoran'], $JmlTugas) == 100 ? 'Selesai' : 'Tidak Selesai'; ?>">
                        <input type="hidden" name="Prosentase[]" value="<?= prosentase($d_setoran['jumlah_setoran'], $JmlTugas); ?>">
                        <input type="hidden" name="Reward[]" value="<?= prosentase($d_setoran['jumlah_setoran'], $JmlTugas) == 100 ? 'Reward' : 'Tidak Dapat Reward'; ?>">
                      </tr>



                    <?php endforeach; ?>

                </tbody>


              </table>


              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fas fa-users"></i> Proses Hasil</button>
              </div>


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

<script type="text/javascript">
  function cek_kelas() {
    var kelas = $(this).val();
    alert(kelas);
  }
</script>