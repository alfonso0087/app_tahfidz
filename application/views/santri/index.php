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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Santri">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSiswa"><i class="fas fa-plus"></i> Tambah Data</button>
                <!-- <button type="button" class="btn btn-outline-primary ml-2" data-toggle="modal" data-target="#importSiswa"><i class="fas fa-fw fa-file-upload"></i> Import Data</button>
                <button type="button" class="btn btn-outline-warning ml-2" data-toggle="modal" data-target="#exportSiswa"><i class="fas fa-fw fa-file-download"></i> Export Data</button> -->
              </div>

              <table id="example2" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th style="width: 100px;">NIS</th>
                    <th>Nama Lengkap</th>
                    <th>Status</th>
                    <th>Kelas</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($santri as $san) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $san['NIS']; ?></td>
                      <td><?= $san['NamaLengkap']; ?></td>
                      <td><?= $san['Status']; ?></td>
                      <td><?= $san['NamaKelas']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editSiswa<?= $san['IdSiswa']; ?>">Ubah</button>
                        <a href="<?= base_url('santri/delete/' . $san['IdSiswa']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Santri" namaData=<?= $san['NIS']; ?>>Hapus</a>
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

<!-- Modal AddSiswa -->
<div class="modal fade" id="addSiswa">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Santri</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('santri/add'); ?>
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" required>
        </div>
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <select name="status" class="form-control">
            <option> -- Pilih Status -- </option>
            <option value="Aktif">Aktif</option>
            <option value="Non Aktif">Non Aktif</option>
            <option value="Lulus">Lulus</option>
          </select>
        </div>
        <div class="form-group">
          <label for="kelas">Kelas</label>
          <select name="kelas" class="form-control">
            <option> -- Pilih Kelas -- </option>
            <?php foreach ($kelas as $kls) : ?>
              <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?>/<?= $kls['Tingkat']; ?>/<?= $kls['Kampus']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
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
<div class="modal fade" id="importSiswa">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Import Data Santri</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('santri/import'); ?>
        <div class="form-group">
          <label for="importSiswa">Pilih File</label>
          <small>(.xls/.xlsx)</small>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="import" name="importSiswa" accept=".xls,.xlsx" onchange="previewImg()">
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


<!-- Modal ExportSiswa -->
<div class="modal fade" id="exportSiswa">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Export Data Santri</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('santri/import'); ?>
        <div class="form-group">
          <label for="importSiswa">Pilih File</label>
          <small>(.xls/.xlsx)</small>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="import" name="importSiswa" accept=".xls,.xlsx" onchange="previewImg()">
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

<!-- Modal EditSiswa -->
<?php foreach ($santri as $s) : ?>
  <div class="modal fade" id="editSiswa<?= $s['IdSiswa']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Santri</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('santri/update/' . $s['IdSiswa']); ?>
          <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" value="<?= $s['NIS']; ?>" required>
          </div>
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?= $s['NamaLengkap']; ?>" required>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
              <?php if ($s['Status'] == 'Aktif') : ?>
                <option> -- Pilih Status -- </option>
                <option value="Aktif" selected>Aktif</option>
                <option value="Non Aktif">Non Aktif</option>
                <option value="Lulus">Lulus</option>
              <?php elseif ($s['Status'] == 'Non Aktif') : ?>
                <option> -- Pilih Status -- </option>
                <option value="Aktif">Aktif</option>
                <option value="Non Aktif" selected>Non Aktif</option>
                <option value="Lulus">Lulus</option>
              <?php else : ?>
                <option> -- Pilih Status -- </option>
                <option value="Aktif">Aktif</option>
                <option value="Non Aktif">Non Aktif</option>
                <option value="Lulus" selected>Lulus</option>
              <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="kelas">Kelas</label>
            <select name="kelas" class="form-control">
              <?php if ($s['IdKelas']) : ?>
                <option value="<?= $s['IdKelas']; ?>" selected> <?= $s['NamaKelas']; ?>/<?= $s['Tingkat']; ?>/<?= $s['Kampus']; ?> </option>
                <option> -- Pilih Kelas -- </option>
                <?php foreach ($kelas as $kls) : ?>
                  <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?>/<?= $kls['Tingkat']; ?>/<?= $kls['Kampus']; ?></option>
                <?php endforeach; ?>
              <?php else : ?>
                <option> -- Pilih Kelas -- </option>
                <?php foreach ($kelas as $kls) : ?>
                  <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?>/<?= $kls['Tingkat']; ?>/<?= $kls['Kampus']; ?></option>
                <?php endforeach; ?>
              <?php endif; ?>
            </select>
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