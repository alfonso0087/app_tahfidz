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
                <a href="<?= base_url('halaqoh/rekap_setoran/form_add'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Proses Setoran</a>
              </div>

              <!-- Form Pencarian -->
              <div class="row" style="text-align: right;">
                <div class="col-sm-9">
                </div>
                <div class="col-sm-3">
                  <form class="form-inline" action="<?= base_url('halaqoh/Rekap_Setoran/cari_data'); ?>" method="POST">
                    <label class="sr-only" for="inlineFormInputName2">Cari</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Masukkan Nama Santri" name="nama_santri">
                    <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-fw fa-search"></i> Cari</button>
                  </form>
                </div>
              </div>

              <table id="example2" class="table table-striped table-bordered text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Santri</th>
                    <th>Kelas</th>
                    <th>Jumlah <br>Tugas</th>
                    <th>Jumlah <br> Setoran</th>
                    <th>Pekan Ke-</th>
                    <th>Prosentase</th>
                    <th>Hasil</th>
                    <th>Reward</th>
                    <th style="width: 50px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $jum = 1;
                  foreach ($rekap_setoran as $rs) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $rs['NamaLengkap']; ?></td>
                      <td><?= $rs['NamaKelas']; ?></td>
                      <td><?= $rs['JmlTugas']; ?></td>
                      <td><?= $rs['JmlSetoran']; ?></td>
                      <td><?= $rs['PekanRekap']; ?></td>
                      <td><?= $rs['Prosentase']; ?></td>
                      <td><?= $rs['Hasil']; ?></td>
                      <td><?= $rs['Reward']; ?></td>
                      <?php if ($jum <= 1) : ?>
                        <td rowspan="<?= $rs['jumlah_kelas']; ?>" style="text-align: center;vertical-align: middle;">
                          <a href="<?= base_url('halaqoh/Rekap_setoran/delete/' . $rs['IdKelas']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Kelas" namaData=<?= $rs['NamaKelas']; ?>>Hapus</a>
                        </td>
                        <?php $jum = $rs['jumlah_kelas']; ?>
                      <?php else : ?>
                        <?php $jum = $jum - 1; ?>
                      <?php endif; ?>
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