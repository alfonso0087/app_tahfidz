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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Tahun Ajaran">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAjaran"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Ajaran</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($ajaran as $ajar) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $ajar['ThAjaran']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editAjaran<?= $ajar['IdAjaran']; ?>">Ubah</button>
                        <a href="<?= base_url('tahfidz/ajaran/delete/' . $ajar['IdAjaran']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Tahun Ajaran" namaData=<?= $ajar['ThAjaran']; ?>>Hapus</a>
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

<!-- Modal AddAjaran -->
<div class="modal fade" id="addAjaran">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Ajaran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('tahfidz/ajaran/add'); ?>
        <div class="form-group">
          <label for="ajaran">Tahun Ajaran</label>
          <input type="text" class="form-control" id="ajaran" placeholder="Masukkan Tahun Ajaran" name="ajaran" required autocomplete="off">
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


<!-- Modal AddAjaran -->
<?php foreach ($ajaran as $aj) : ?>
  <div class="modal fade" id="editAjaran<?= $aj['IdAjaran']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Ajaran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('tahfidz/ajaran/update/' . $aj['IdAjaran']); ?>
          <div class="form-group">
            <label for="ajaran">Tahun Ajaran</label>
            <input type="text" class="form-control" id="ajaran" placeholder="Masukkan Tahun Ajaran" name="ajaran" value="<?= $aj['ThAjaran']; ?>" required autocomplete="off">
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