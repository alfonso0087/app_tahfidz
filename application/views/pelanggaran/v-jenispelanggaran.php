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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Jenis Pelanggaran">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addJenisPelanggaran"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Jenis Iqob</th>
                    <th>Poin</th>
                    <th>Kategori</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($jenispelanggaran as $jp) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $jp['JenisIqob']; ?></td>
                      <td><?= $jp['Poin']; ?></td>
                      <td><?= $jp['Kategori']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#UpdateJenisPelanggaran<?= $jp['IdJenisIqob']; ?>">Ubah</button>
                        <a href="<?= base_url('pelanggaran/jenis_pelanggaran/delete/' . $jp['IdJenisIqob']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Jenis Pelanggaran" namaData=<?= $jp['JenisIqob']; ?>>Hapus</a>
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

<!-- Modal AddPelanggaran -->
<div class="modal fade" id="addJenisPelanggaran">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Pelanggaran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('pelanggaran/jenis_pelanggaran/add'); ?>
        <div class="form-group">
          <label for="jenis_iqob">Jenis Iqob</label>
          <input type="text" class="form-control" id="jenis_iqob" placeholder="jenis Iqob" name="jenis_iqob" required>
        </div>
        <div class="form-group">
          <label for="poin">Poin</label>
          <input type="text" class="form-control" id="poin" placeholder="poin" name="poin" required>
        </div>
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <select name="kategori" class="form-control">
            <option> -- Pilih Kategori -- </option>
            <option value="Ibadah">Ibadah</option>
            <option value="Bahasa">Bahasa</option>
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


<!-- Modal EditPelanggaran -->
<?php foreach ($jenispelanggaran as $jpg) : ?>
  <div class="modal fade" id="UpdateJenisPelanggaran<?= $jpg['IdJenisIqob']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Kelas</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?= form_open('pelanggaran/jenis_pelanggaran/update/' . $jpg['IdJenisIqob']); ?>
          <div class="form-group">
            <label for="jenis_iqob">Jenis Iqob</label>
            <input type="text" class="form-control" id="jenis_iqob" value="<?= $jpg['JenisIqob']; ?>" name="jenis_iqob" required autofocus>
          </div>
          <div class="form-group">
            <label for="poin">Poin</label>
            <input type="text" class="form-control" id="poin" value="<?= $jpg['Poin']; ?>" name="poin" required autofocus>
          </div>
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select name="kategori" class="form-control">
              <?php if ($jpg['Kategori'] == "Ibadah") : ?>
                <option> -- Pilih Kategori -- </option>
                <option value="<?= $jpg['Kategori']; ?>" selected> Ibadah </option>
                <option value="Bahasa"> Bahasa </option>
              <?php else : ?>
                <option> -- Pilih Kategori -- </option>
                <option value="Ibadah"> Ibadah </option>
                <option value="<?= $jpg['Kategori']; ?>" selected> Bahasa </option>
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