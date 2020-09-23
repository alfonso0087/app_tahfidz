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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Musyrif">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMusyrif"><i class="fas fa-plus"></i> Tambah Data</button>
                <button type="button" class="btn btn-outline-primary ml-2" data-toggle="modal" data-target="#importMusyrif"><i class="fas fa-fw fa-file-upload"></i> Import Data</button>
                <button type="button" class="btn btn-outline-warning ml-2" data-toggle="modal" data-target="#exportMusyrif"><i class="fas fa-fw fa-file-download"></i> Export Data</button>
              </div>

              <table id="example2" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kontak</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($musyrif as $m) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $m['NamaMusyrif']; ?></td>
                      <td><?= $m['Email']; ?></td>
                      <td><?= $m['NoHp']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editMusyrif<?= $m['IdMusyrif']; ?>">Ubah</button>
                        <a href="<?= base_url('musyrif/delete/' . $m['IdMusyrif']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Musyrif" namaData=<?= $m['NamaMusyrif']; ?>>Hapus</a>
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

<!-- Modal AddMusyrif -->
<div class="modal fade" id="addMusyrif">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Musyrif</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('musyrif/add'); ?>
        <div class="form-group">
          <label for="nama_musyrif">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_musyrif" placeholder="Nama Lengkap" name="nama_musyrif" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" placeholder="Email" name="email" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="no_hp">No Handphone</label>
          <input type="text" class="form-control" id="no_hp" placeholder="No Handphone" name="no_hp" required autocomplete="off">
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

<!-- Modal ImportSiswa -->
<div class="modal fade" id="importMusyrif">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Import Data Musyrif</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('musyrif/import'); ?>
        <div class="form-group">
          <label for="importSiswa">Pilih File</label>
          <small>(.xls/.xlsx)</small>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="import" name="importMusyrif" accept=".xls,.xlsx" onchange="previewImg()">
            <label class="custom-file-label" for="customFile">Pilih File</label>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Import</button>
      </div>
      <?= form_close(); ?>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal ExportMusyrif -->
<div class="modal fade" id="exportMusyrif">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Export Data Musyrif</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('musyrif/export'); ?>
        <div class="form-group">
          <label for="importSiswa">Pilih Tipe File Untuk Export Data</label>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tipeFile" value="pdf">
                <label class="form-check-label">PDF</label>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tipeFile" value="xls">
                <label class="form-check-label">Xls</label>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tipeFile" value="xlsx">
                <label class="form-check-label">Xlsx</label>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-file-download"></i> Export</button>
      </div>
      <?= form_close(); ?>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal EditMusyrif -->
<?php
foreach ($musyrif as $m) : ?>
  <div class="modal fade" id="editMusyrif<?= $m['IdMusyrif']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Musyrif</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?= form_open('musyrif/update/' . $m['IdMusyrif']); ?>
          <div class="form-group">
            <label for="nama_musyrif">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_musyrif" name="nama_musyrif" value="<?= $m['NamaMusyrif']; ?>" required autofocus>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?= $m['Email']; ?>" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="no_hp">No Handphone</label>
            <input type="text" class="form-control" id="no_hp" placeholder="No Handphone" name="no_hp" value="<?= $m['NoHp']; ?>" required autocomplete="off">
          </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Ubah</button>
        </div>
        <?= form_close(); ?>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php endforeach; ?>
<!-- /.modal -->