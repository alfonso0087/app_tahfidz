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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Jenis Catatan">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addJenisCatatan"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Jenis Catatan</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($jenis_catatan as $jc) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $jc['JenisCatatan']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#UpdateJenisCatatan<?= $jc['IdJenisCatatan']; ?>">Ubah</button>
                        <a href="<?= base_url('catatan/jenis_catatan/delete/' . $jc['IdJenisCatatan']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Jenis Catatan" namaData=<?= $jc['JenisCatatan']; ?>>Hapus</a>
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

<!-- Modal AddCatatan -->
<div class="modal fade" id="addJenisCatatan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Jenis Catatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('catatan/jenis_catatan/add'); ?>
        <div class="form-group">
          <label for="jenis_catatan">Jenis catatan</label>
          <input type="text" class="form-control" id="jenis_catatan" placeholder="Jenis Catatan" name="jenis_catatan" required autocomplete="off" autofocus>
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


<!-- Modal AddCatatan -->
<?php foreach ($jenis_catatan as $j_catatan) : ?>
  <div class="modal fade" id="UpdateJenisCatatan<?= $j_catatan['IdJenisCatatan']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Jenis Catatan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('catatan/jenis_catatan/update/' . $j_catatan['IdJenisCatatan']); ?>
          <div class="form-group">
            <label for="jenis_catatan">Jenis catatan</label>
            <input type="text" class="form-control" id="jenis_catatan" placeholder="Jenis Catatan" name="jenis_catatan" value="<?= $j_catatan['JenisCatatan']; ?>" required autocomplete="off">
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