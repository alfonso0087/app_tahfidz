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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Jadwal">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addJadwal"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($jadwal as $j) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $j['Waktu']; ?></td>
                      <td><?= $j['Ket']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editJadwal<?= $j['IdJadwal']; ?>">Ubah</button>
                        <a href="<?= base_url('halaqoh/jadwal/delete/' . $j['IdJadwal']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Tanggal" namaData=<?= date('d F Y', strtotime($j['Waktu'])); ?>>Hapus</i></a>
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

<!-- Modal Add Waktu Halaqoh -->
<div class="modal fade" id="addJadwal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Waktu Halaqoh</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('halaqoh/jadwal/add'); ?>
        <!-- Waktu Halaqoh -->
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="waktu">Waktu</label>
          </div>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Waktu" name="waktu" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="keterangan">Keterangan</label>
          </div>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" name="keterangan" required autocomplete="off">
          </div>
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


<!-- Modal Edit Waktu Halaqoh -->
<?php foreach ($jadwal as $jdw) : ?>
  <div class="modal fade" id="editJadwal<?= $jdw['IdJadwal']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Waktu Halaqoh</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('halaqoh/jadwal/update/' . $jdw['IdJadwal']); ?>
          <!-- Keterangan -->
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="waktu">Waktu</label>
            </div>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Waktu" name="waktu" value="<?= $jdw['Waktu']; ?>" required autocomplete="off">
            </div>
          </div>
          <!-- Keterangan -->
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="keterangan">Keterangan</label>
            </div>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan" name="keterangan" value="<?= $jdw['Ket']; ?>" required autocomplete="off">
            </div>
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