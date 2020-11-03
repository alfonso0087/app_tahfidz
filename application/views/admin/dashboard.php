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
              <h4 class="m-0" style="color: white;">Rekap Setoran Santri Per Kelompok Pada Periode Tertentu</h4>
            </div>
            <div class="card-body">
              <form action="<?= base_url('admin'); ?>">
                <!-- Periode -->
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label for="Periode">Pilih Periode Setoran</label>
                  </div>
                  <div class="col-sm-8">
                    <select name="periode" class="form-control">
                      <option value=""> -- Pilih Periode Setoran -- </option>
                      <?php foreach ($periode as $p) : ?>
                        <option value="<?= $p['IdPeriode']; ?>"><?= $p['Periode']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <!-- Kelompok Halaqoh -->
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label for="Kelompok">Pilih Kelompok Halaqoh</label>
                  </div>
                  <div class="col-sm-8">
                    <select name="kelompok" class="form-control">
                      <option value=""> -- Pilih Kelompok Halaqoh -- </option>
                      <?php foreach ($kelompok_halaqoh as $kh) : ?>
                        <option value="<?= $kh['IdKelompok']; ?>"><?= $kh['NamaKelompok']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12 pull-right text-right">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-book"></i> Tampil Rekap</button>
                  </div>
                </div>
              </form>
              <br>

              <table id="example2" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Santri</th>
                    <th>Jumlah Setoran</th>
                    <th>Pekan</th>
                    <th>Prosentase</th>
                    <th>Hasil</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  if ($rekap_setoran_kelompok)
                    foreach ($rekap_setoran_kelompok as $rekap) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $rekap['NamaLengkap']; ?></td>
                      <td><?= $rekap['JmlSetoran']; ?></td>
                      <td><?= $rekap['PekanRekap']; ?></td>
                      <td><?= $rekap['Prosentase']; ?></td>
                      <td><?= $rekap['Hasil']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
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