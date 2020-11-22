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
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRekapSetoran"><i class="fas fa-plus"></i> Proses Setoran</button> -->
                <a href="<?= base_url('Halaman_Musyrif/form_add_rekap_setoran'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Proses Setoran</a>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Santri</th>
                    <th>Jumlah Tugas</th>
                    <th>Jumlah Setoran</th>
                    <th>Pekan Ke-</th>
                    <th>Prosentase</th>
                    <th>Hasil</th>
                    <th>Reward</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($rekap_setoran as $rs) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $rs['NamaLengkap']; ?></td>
                      <td><?= $rs['JmlTugas']; ?></td>
                      <td><?= $rs['JmlSetoran']; ?></td>
                      <td><?= $rs['PekanRekap']; ?></td>
                      <td><?= $rs['Prosentase']; ?></td>
                      <td><?= $rs['Hasil']; ?></td>
                      <td><?= $rs['Reward']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

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