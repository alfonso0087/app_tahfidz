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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Rekap Ujian">
            </div>
            <div class="card-body">
              <!-- Add Data -->
              <div class="col mb-3">
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRekapUjian"><i class="fas fa-plus"></i> Tambah Data</button> -->
                <a href="<?= base_url('ujian/rekap_ujian/form_add'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
              </div>

              <!-- Form Pencarian -->
              <div class="row" style="text-align: right;">
                <div class="col-sm-9">
                </div>
                <div class="col-sm-3">
                  <form class="form-inline" action="<?= base_url('ujian/Rekap_Ujian/cari_data'); ?>" method="POST">
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
                    <th style="width: 250px;">Target Ujian</th>
                    <th>Nama Santri</th>
                    <th>Periode Ujian</th>
                    <th>Nilai</th>
                    <th>Predikat</th>
                    <th>Keterangan</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($rekap_ujian as $ru) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td style="text-align: justify;">
                        <?= $ru['NamaUjian']; ?> <br> <?= $ru['Keterangan']; ?>
                      </td>
                      <td><?= $ru['NamaLengkap']; ?></td>
                      <td><?= $ru['Periode']; ?>| <?= $ru['NamaKelas']; ?></td>
                      <td><?= $ru['Nilai']; ?></td>
                      <td><?= $ru['Predikat']; ?></td>
                      <td><b><?= $ru['ket_rekap']; ?></b></td>
                      <td>
                        <a href="<?= base_url('ujian/rekap_ujian/form_update/' . $ru['IdUjian']); ?>" class="btn btn-success">Ubah</a>
                        <a href="<?= base_url('ujian/rekap_ujian/delete/' . $ru['IdUjian']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Rekap Ujian" namaData=<?= $ru['NamaLengkap']; ?>>Hapus</a>
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