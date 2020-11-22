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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Pengguna">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPengguna"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Username</th>
                    <th>Level</th>
                    <!-- <th>Kontak</th> -->
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($pengguna as $akun) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $akun['username']; ?></td>
                      <td><?= $akun['level']; ?></td>
                      <!-- <td><?= $akun['password']; ?></td> -->
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editPengguna<?= $akun['IdUser']; ?>">Ubah</button>
                        <a href="<?= base_url('pengaturan/delete/' . $akun['IdUser']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Akun" namaData=<?= $akun['username']; ?>>Hapus</a>
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

<!-- Modal AddAkun/Pengguna -->
<div class="modal fade" id="addPengguna">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Pengguna</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('pengaturan/add'); ?>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="Level">Level</label>
          <select name="level" class="form-control">
            <option> -- Pilih Level -- </option>
            <option value="Admin">Admin</option>
            <option value="Bagian Administrasi">Bagian Administrasi</option>
            <option value="Wali">Wali</option>
            <option value="Musyrif">Musyrif</option>
          </select>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required autocomplete="off">
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

<!-- Modal EditPengguna -->
<?php
foreach ($pengguna as $usr) : ?>
  <div class="modal fade" id="editPengguna<?= $usr['IdUser']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Pengguna</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?= form_open('pengaturan/update/' . $usr['IdUser']); ?>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" value="<?= $usr['username']; ?>" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="Level">Level</label>
            <select name="level" class="form-control">
              <?php if ($usr['level'] == "Admin") : ?>
                <option> -- Pilih Level -- </option>
                <option value="Admin" selected>Admin</option>
                <option value="Bagian Administrasi">Bagian Administrasi</option>
                <option value="Wali">Wali</option>
                <option value="Musyrif">Musyrif</option>
              <?php elseif ($usr['level'] == "Bagian Administrasi") : ?>
                <option> -- Pilih Level -- </option>
                <option value="Admin">Admin</option>
                <option value="Bagian Administrasi" selected>Bagian Administrasi</option>
                <option value="Wali">Wali</option>
                <option value="Musyrif">Musyrif</option>
              <?php elseif ($usr['level'] == "Wali") : ?>
                <option> -- Pilih Level -- </option>
                <option value="Admin">Admin</option>
                <option value="Bagian Administrasi">Bagian Administrasi</option>
                <option value="Wali" selected>Wali</option>
                <option value="Musyrif">Musyrif</option>
              <?php else : ?>
                <option> -- Pilih Level -- </option>
                <option value="Admin">Admin</option>
                <option value="Bagian Administrasi">Bagian Administrasi</option>
                <option value="Wali">Wali</option>
                <option value="Musyrif" selected>Musyrif</option>
              <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="password">Password Baru</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required autocomplete="off">
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