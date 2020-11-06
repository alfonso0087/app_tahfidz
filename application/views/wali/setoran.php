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
              <h4 class="m-0" style="color: white;">Setoran Santri</h4>
            </div>
            <div class="card-body">
              <!-- Input Pilihan Minggu - Periode -->
              <form action="<?= base_url('Wali/Setoran'); ?>">
                <input type="hidden" name="IdSiswa" value="<?= $user['IdSiswa']; ?>">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="form-group" style="width: auto;">
                      <select name="pekan" id="pekan" class="form-control">
                        <option> -- Pilih Minggu -- </option>
                        <?php foreach ($pekan as $p) : ?>
                          <option value="<?= $p['Pekan']; ?>">Minggu Ke <?= $p['Pekan']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group" style="width: auto;">
                      <select name="periode" id="periode" class="form-control">
                        <option>Pilih Periode</option>
                        <?php foreach ($periode as $p) : ?>
                          <option value="<?= $p['IdPeriode']; ?>"><?= $p['Periode']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <button class="btn btn-primary" type="submit">Tampil Setoran</button>
                  </div>
                </div>
              </form>


              <!-- Tampil Data Rekap Setoran Santri -->
              <div class="row">
                <table class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th style="width: 50px;">No</th>
                      <th>Pekan Ke-</th>
                      <th>Isi Target</th>
                      <th>Tanggal Setoran</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    if ($setoran_santri)
                      foreach ($setoran_santri as $s_santri) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $s_santri['Pekan']; ?></td>
                        <td><?= $s_santri['IsiTarget']; ?></td>
                        <td><?= date_indo($s_santri['Tgl']); ?></td>
                        <td><?= $s_santri['Keterangan']; ?></td>
                      </tr>
                    <?php endforeach; ?>

                  </tbody>

                </table>
              </div>

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