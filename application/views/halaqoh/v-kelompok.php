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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Kelompok">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addKelompok"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Kelompok</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($kelompokhalaqoh as $kh) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $kh['NamaKelompok']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editKelompok<?= $kh['IdKelompok']; ?>">Ubah</button>
                        <a href="<?= base_url('halaqoh/kelompok/delete/' . $kh['IdKelompok']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Kelompok" namaData=<?= $kh['NamaKelompok']; ?>>Hapus</a>
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

<!-- Modal AddKelompok -->
<div class="modal fade" id="addKelompok">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Kelompok</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('halaqoh/kelompok/add'); ?>
        <div class="form-group">
          <label for="kelompok">Nama Kelompok</label>
          <input type="text" class="form-control" id="kelompok" placeholder="Masukkan Nama Kelompok" name="kelompok" required autocomplete="off">
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


<!-- Modal EditKelompok -->
<?php foreach ($kelompokhalaqoh as $kel) : ?>
  <div class="modal fade" id="editKelompok<?= $kel['IdKelompok']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Kelompok</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('halaqoh/kelompok/update/' . $kel['IdKelompok']); ?>
          <div class="form-group">
            <label for="kelompok">Nama Kelompok</label>
            <input type="text" class="form-control" id="kelompok" placeholder="Masukkan Nama Kelompok" name="kelompok" value="<?= $kel['NamaKelompok']; ?>" required autocomplete="off">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Ubah</button>
        </div>
        <?= form_close(); ?>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php endforeach; ?>
<!-- /.modal -->