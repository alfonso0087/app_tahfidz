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
              <h4 class="m-0" style="color: white;">Rekap Target Santri Berdasarkan Pekan Dan Periode Tertentu</h4>
            </div>
            <div class="card-body sm-12">
              <!-- Widget Target -->
              <div class="row">
                <div class="col-sm-4">
                  <div class="info-box bg-primary">
                    <span class="info-box-icon"><i class="fas fa-fw fa-check-circle"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text" style="font-size: 18px;">Jumlah Target</span>
                      <span class="info-box-number"><?= $jumlah_setoran['Jumlah_Setoran'] ? $jumlah_setoran['Jumlah_Setoran'] : '00'; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="info-box bg-success">
                    <span class="info-box-icon"><i class="fas fa-fw fa-tasks"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text" style="font-size: 18px;">Jumlah Target Selesai</span>
                      <span class="info-box-number"><?= $setoran_selesai['Jumlah_Setoran_Selesai'] ? $setoran_selesai['Jumlah_Setoran_Selesai'] : '00'; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="info-box bg-danger">
                    <span class="info-box-icon"><i class="fas fa-fw fa-list-ul"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text" style="font-size: 18px;">Jumlah Target Tidak Selesai</span>
                      <span class="info-box-number"><?= $setoran_tidak_selesai['Jumlah_Setoran_Tidak_Selesai'] ? $setoran_tidak_selesai['Jumlah_Setoran_Tidak_Selesai'] : '00'; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </div>
              </div>
              <!-- Input Pilihan Minggu - Periode -->
              <form action="<?= base_url('Wali'); ?>">
                <input type="hidden" name="IdSiswa" value="<?= $user['IdSiswa']; ?>">
                <div class="row sm-12">
                  <div class="col-sm-2">
                    <div class="form-group" style="width: auto;">
                      <select name="pekan" id="pekan" class="form-control">
                        <option>Pilih Minggu</option>
                        <?php foreach ($pekan as $p) : ?>
                          <option value="<?= $p['Pekan']; ?>"><?= $p['Pekan']; ?></option>
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
                  <div class="col-sm-8 text-right">
                    <button class="btn btn-primary" type="submit">Tampil</button>
                  </div>
                </div>
              </form>

              <!-- Tampil Data Rekap Setoran Santri -->
              <div class="row">
                <table class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th style="width: 50px;">No</th>
                      <th>Isi Target</th>
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
                        <td><?= $s_santri['IsiTarget']; ?></td>
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