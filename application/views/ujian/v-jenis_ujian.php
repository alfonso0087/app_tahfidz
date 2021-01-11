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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Jenis Ujian">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addJenisUjian"><i class="fas fa-plus"></i> Tambah Data</button>
                <a href="<?= base_url('ujian/jenis_ujian/export_excel'); ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-excel"></i> Export Data</a>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Ujian</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($jenis_ujian as $ju) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $ju['NamaUjian']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editJenisUjian<?= $ju['IdJenisUjian']; ?>">Ubah</button>
                        <a href="<?= base_url('ujian/jenis_ujian/delete/' . $ju['IdJenisUjian']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Jenis Ujian" namaData=<?= $ju['NamaUjian']; ?>>Hapus</a>
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

<!-- Modal AddJenis Ujian -->
<div class="modal fade" id="addJenisUjian">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Jenis Ujian</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('ujian/jenis_ujian/add'); ?>
        <div class="form-group">
          <label for="ujian">Nama Ujian</label>
          <input type="text" class="form-control" id="ujian" placeholder="Masukkan Nama Ujian" name="ujian" required autocomplete="off">
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
      </div>
      <?= form_close(); ?>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal EditJenis Ujian -->
<?php foreach ($jenis_ujian as $j_ujian) : ?>
  <div class="modal fade" id="editJenisUjian<?= $j_ujian['IdJenisUjian'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Jenis Ujian</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('ujian/jenis_ujian/update/' . $j_ujian['IdJenisUjian']); ?>
          <div class="form-group">
            <label for="ujian">Nama Ujian</label>
            <input type="text" class="form-control" id="ujian" placeholder="Masukkan Nama Ujian" name="ujian" value="<?= $j_ujian['NamaUjian']; ?>" required autocomplete="off">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
        <?= form_close(); ?>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php endforeach; ?>
<!-- /.modal -->