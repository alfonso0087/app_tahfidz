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
              <h4 class="m-0" style="color: white;">Rekap Target Santri Berdasarkan Periode Tertentu</h4>
            </div>
            <div class="card-body sm-12">

              <!-- Input Pilihan Minggu - Periode -->
              <form action="<?= base_url('Wali'); ?>">
                <input type="hidden" name="IdSiswa" value="<?= $user['IdSiswa']; ?>">
                <div class="row sm-12">
                  <div class="col-sm-8">
                    <div class="form-group" style="width: auto;">
                      <select name="periode" id="periode" class="form-control">
                        <option>Pilih Periode</option>
                        <?php foreach ($periode as $p) : ?>
                          <option value="<?= $p['IdPeriode']; ?>"><?= $p['Periode']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <button class="btn btn-primary" type="submit">Tampil</button>
                  </div>
                </div>
              </form>

              <!-- Widget Target -->
              <div class="row">
                <div class="col-sm-3">
                  <div class="info-box-sm bg-primary">
                    <div class="info-box-content-sm">
                      <span class="info-box-icon"><i class="fas fa-fw fa-check-circle"></i></span>
                      <span class="info-box-text" style="font-size: 18px;">Jumlah Target : </span>
                      <span class="info-box-number"><?= $jumlah_setoran['Jumlah_Setoran'] ? $jumlah_setoran['Jumlah_Setoran'] : '00'; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </div>
              </div>

              <!-- Tampil Data Rekap Setoran Santri -->
              <div class="row pt-2">
                <table class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th style="width: 50px;">No</th>
                      <th>Pekan</th>
                      <th>Isi Target</th>
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
                      </tr>
                    <?php endforeach; ?>

                  </tbody>

                </table>
              </div>

              <!-- Tampil Data Rekap Setoran Santri Selesai -->
              <div class="row">
                <div class="col-sm-3">
                  <div class="info-box-sm bg-success">
                    <div class="info-box-content-sm">
                      <span class="info-box-icon"><i class="fas fa-fw fa-tasks"></i></span>
                      <span class="info-box-text" style="font-size: 18px;">Jumlah Target Selesai : </span>
                      <span class="info-box-number"><?= $setoran_selesai['Jumlah_Setoran_Selesai'] ? $setoran_selesai['Jumlah_Setoran_Selesai'] : '00'; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </div>
              </div>
              <div class="row pt-2">
                <table class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th style="width: 50px;">No</th>
                      <th>Pekan</th>
                      <th>Isi Target</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    if ($rekap_setoran_selesai)
                      foreach ($rekap_setoran_selesai as $rs_santri) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $rs_santri['Pekan']; ?></td>
                        <td><?= $rs_santri['IsiTarget']; ?></td>
                      </tr>
                    <?php endforeach; ?>

                  </tbody>

                </table>
              </div>

              <!-- Tampil Data Rekap Setoran Santri Tidak Selesai -->
              <div class="row">
                <div class="col-sm-3">
                  <div class="info-box-sm bg-danger">
                    <div class="info-box-content-sm">
                      <span class="info-box-icon"><i class="fas fa-fw fa-list-ul"></i></span>
                      <span class="info-box-text" style="font-size: 18px;">Jumlah Target Tidak Selesai : </span>
                      <span class="info-box-number"><?= $setoran_tidak_selesai['Jumlah_Setoran_Tidak_Selesai'] ? $setoran_tidak_selesai['Jumlah_Setoran_Tidak_Selesai'] : '00'; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </div>
              </div>
              <div class="row pt-2">
                <table class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th style="width: 50px;">No</th>
                      <th>Pekan</th>
                      <th>Isi Target</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    if ($rekap_setoran_tidak_selesai)
                      foreach ($rekap_setoran_tidak_selesai as $rsts_santri) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $rsts_santri['Pekan']; ?></td>
                        <td><?= $rsts_santri['IsiTarget']; ?></td>
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