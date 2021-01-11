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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Kelas">
            </div>
            <div class="card-body">
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addKelas"><i class="fas fa-plus"></i> Tambah Data</button>
                <a href="<?= base_url('kelas/export_excel'); ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-excel"></i> Export Data</a>
              </div>

              <table id="example2" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Kelas</th>
                    <th>Tingkat</th>
                    <th>Kampus</th>
                    <th>Sebutan</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($kelas as $kls) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $kls['NamaKelas']; ?></td>
                      <td><?= $kls['Tingkat']; ?></td>
                      <td><?= $kls['Kampus']; ?></td>
                      <td><?= $kls['SebutanKelas']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editKelas<?= $kls['IdKelas']; ?>">Ubah</button>
                        <a href="<?= base_url('kelas/delete/' . $kls['IdKelas']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Kelas" namaData=<?= $kls['NamaKelas']; ?>>Hapus</a>
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

<!-- Modal AddKelas -->
<div class="modal fade" id="addKelas">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Kelas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('kelas/add'); ?>
        <div class="form-group">
          <label for="nama_kategori">Nama Kelas</label>
          <input type="text" class="form-control" id="nama_kategori" placeholder="Nama Kelas" name="nama_kelas" required>
        </div>
        <div class="form-group">
          <label for="nama_kategori">Tingkat</label>
          <select name="tingkat" class="form-control">
            <option> -- Pilih Tingkat -- </option>
            <option value="MTs">MTs</option>
            <option value="MA">MA</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nama_kategori">Kampus</label>
          <select name="kampus" class="form-control">
            <option> -- Pilih Kampus -- </option>
            <option value="Kampus 1">Kampus 1</option>
            <option value="Kampus 2">Kampus 2</option>
          </select>
        </div>
        <div class="form-group">
          <label for="sebutan_kelas">Sebutan Kelas</label>
          <select name="sebutan_kelas" class="form-control">
            <option> -- Pilih Sebutan Kelas -- </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
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


<!-- Modal EditKelas -->
<?php
foreach ($kelas as $kel) : ?>
  <div class="modal fade" id="editKelas<?= $kel['IdKelas']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Kelas</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?= form_open('kelas/update/' . $kel['IdKelas']); ?>
          <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" class="form-control" id="nama_kelas" value="<?= $kel['NamaKelas']; ?>" name="nama_kelas" required autofocus>
          </div>
          <div class="form-group">
            <label for="tingkat">Tingkat</label>
            <select name="tingkat" class="form-control">
              <?php if ($kel['Tingkat'] == "MTs") : ?>
                <option> -- Pilih Tingkat -- </option>
                <option value="<?= $kel['Tingkat']; ?>" selected>MTs</option>
                <option value="MA">MA</option>
              <?php else : ?>
                <option> -- Pilih Tingkat -- </option>
                <option value="MTs">MTs</option>
                <option value="<?= $kel['Tingkat']; ?>" selected>MA</option>
              <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="kampus">Kampus</label>
            <select name="kampus" class="form-control">
              <?php if ($kel['Kampus'] == "Kampus 1") : ?>
                <option> -- Pilih Kampus -- </option>
                <option value="<?= $kel['Kampus']; ?>" selected>Kampus 1</option>
                <option value="Kampus 2">Kampus 2</option>
              <?php else : ?>
                <option> -- Pilih Kampus -- </option>
                <option value="Kampus 1">Kampus 1</option>
                <option value="<?= $kel['Kampus']; ?>" selected>Kampus 2</option>
              <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="sebutan_kelas">Sebutan Kelas</label>
            <select name="sebutan_kelas" class="form-control">
              <?php if ($kel['SebutanKelas']) : ?>
                <option value="<?= $kel['SebutanKelas']; ?>"><?= $kel['SebutanKelas']; ?></option>
                <option> -- Pilih Sebutan Kelas -- </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              <?php else : ?>
                <option> -- Pilih Sebutan Kelas -- </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              <?php endif; ?>
            </select>
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