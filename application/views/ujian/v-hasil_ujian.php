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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Hasil Ujian">
            </div>
            <div class="card-body">
              <!-- Add Data -->
              <div class="col mb-3">
                <a href="<?= base_url('ujian/hasil_ujian/form_add'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-user"></i> Proses Nilai (Individu)</a>
                <a href="<?= base_url('ujian/hasil_ujian/form_add_banyak'); ?>" class="btn btn-primary btn-sm ml-2"><i class="fas fa-users"></i> Proses Nilai (Kelas)</a>
                <a href="<?= base_url('ujian/hasil_ujian/perankingan'); ?>" class="btn btn-primary btn-sm ml-2"><i class="fas fa-sort-numeric-down"></i> Perankingan</a>
                <a href="<?= base_url('ujian/hasil_ujian/export_excel'); ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-excel"></i> Export Data</a>
                <a href="<?= base_url('ujian/hasil_ujian/reset_hasilujian'); ?>" class="btn btn-sm btn-warning ml-3" onclick="return confirm('Reset Data Hasil Ujian?');"><i class="fas fa-ban"></i> Reset Data</a>
              </div>

              <div class="row" style="text-align: right;">
                <div class="col-sm-9">
                </div>
                <div class="col-sm-3">
                  <form class="form-inline" action="<?= base_url('ujian/Hasil_Ujian/cari_data'); ?>" method="POST">
                    <label class="sr-only" for="inlineFormInputName2">Cari</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Masukkan Nama Santri" name="nama_santri">
                    <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-fw fa-search"></i> Cari</button>
                  </form>
                </div>
              </div>
              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 30px;">No</th>
                    <!-- <th style="width: 250px;">Target Ujian</th> -->
                    <th>Nama Santri</th>
                    <th>Kelas</th>
                    <th>Periode</th>
                    <th>Total Nilai</th>
                    <th>Rata-Rata</th>
                    <th>Reward</th>
                    <th>Rangking</th>
                    <th style="width: 150px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($hasil_ujian as $hu) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $hu['NamaLengkap']; ?></td>
                      <td><?= $hu['NamaKelas']; ?></td>
                      <td><?= $hu['periode']; ?></td>
                      <td><?= $hu['Total']; ?></td>
                      <td><?= round($hu['Rata-rata'], 1); ?></td>
                      <td><?= $hu['Reward']; ?></td>
                      <td><?= $hu['Rangking']; ?></td>
                      <td>
                        <a href="<?= base_url('ujian/hasil_ujian/form_update/' . $hu['IdHasil']); ?>" class="btn btn-success btn-sm">Ubah</a>
                        <a href="<?= base_url('ujian/hasil_ujian/delete/' . $hu['IdHasil']); ?>" class="btn btn-danger btn-sm ml-3 tombol-hapus" tipeData="Hasil Ujian" namaData=<?= $hu['NamaLengkap']; ?>>Hapus</a>
                      </td>
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