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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Detail Kelompok">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDetailKelompok"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Kelompok</th>
                    <th>Nama Santri</th>
                    <th>Nama Musyrif</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($detail_kelompok as $detail) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $detail['NamaKelompok']; ?></td>
                      <td><?= $detail['NamaLengkap']; ?></td>
                      <td><?= $detail['NamaMusyrif']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editDetailKelompok<?= $detail['IdDetailKelompok']; ?>">Ubah</button>
                        <a href="<?= base_url('halaqoh/detail_kelompok/delete/' . $detail['IdDetailKelompok']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Detail Kelompok" namaData=<?= $detail['NamaKelompok']; ?>>Hapus</a>
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

<!-- Modal AddDetailKelompok -->
<div class="modal fade" id="addDetailKelompok">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Detail Kelompok</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('halaqoh/detail_kelompok/add'); ?>
        <!-- Kelompok -->
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="kelompok">Kelompok</label>
          </div>
          <div class="col-sm-8">
            <select name="kelompok" class="form-control">
              <option> -- Pilih Kelompok -- </option>
              <?php foreach ($kelompok as $klp) : ?>
                <option value="<?= $klp['IdKelompok']; ?>"><?= $klp['NamaKelompok']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Santri -->
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="santri">Santri</label>
          </div>
          <div class="col-sm-8">
            <select name="siswa" class="form-control">
              <option> -- Pilih Santri -- </option>
              <?php foreach ($siswa as $sis) : ?>
                <option value="<?= $sis['IdSiswa']; ?>"><?= $sis['NamaKelas']; ?> | <?= $sis['NamaLengkap']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Musyrif -->
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="musyrif">Musyrif</label>
          </div>
          <div class="col-sm-8">
            <select name="musyrif" class="form-control">
              <option> -- Pilih Musyrif -- </option>
              <?php foreach ($musyrif as $mus) : ?>
                <option value="<?= $mus['IdMusyrif']; ?>"><?= $mus['NamaMusyrif']; ?></option>
              <?php endforeach; ?>
            </select>
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

<!-- Modal AddDetailKelompok -->
<?php foreach ($detail_kelompok as $dk) : ?>
  <div class="modal fade" id="editDetailKelompok<?= $dk['IdDetailKelompok']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Detail Kelompok</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('halaqoh/detail_kelompok/update/' . $dk['IdDetailKelompok']); ?>
          <!-- Kelompok -->
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="kelompok">Kelompok</label>
            </div>
            <div class="col-sm-8">
              <select name="kelompok" class="form-control">
                <?php if ($dk['IdKelompok']) : ?>
                  <option value="<?= $dk['IdKelompok']; ?>" selected><?= $dk['NamaKelompok']; ?></option>
                  <option value=""> -- Pilih Kelompok -- </option>
                  <?php foreach ($kelompok as $klp) : ?>
                    <option value="<?= $klp['IdKelompok']; ?>"><?= $klp['NamaKelompok']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Kelompok -- </option>
                  <?php foreach ($kelompok as $klp) : ?>
                    <option value="<?= $klp['IdKelompok']; ?>"><?= $klp['NamaKelompok']; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <!-- Santri -->
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="santri">Santri</label>
            </div>
            <div class="col-sm-8">
              <select name="siswa" class="form-control">
                <?php if ($dk['IdSiswa']) : ?>
                  <option value="<?= $dk['IdSiswa']; ?>"><?= $dk['NamaLengkap']; ?></option>
                  <option value=""> -- Pilih Santri -- </option>
                  <?php foreach ($siswa as $sis) : ?>
                    <option value="<?= $sis['IdSiswa']; ?>"><?= $sis['NamaKelas']; ?> | <?= $sis['NamaLengkap']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Santri -- </option>
                  <?php foreach ($siswa as $sis) : ?>
                    <option value="<?= $sis['IdSiswa']; ?>"><?= $sis['NamaKelas']; ?> | <?= $sis['NamaLengkap']; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <!-- Musyrif -->
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="musyrif">Musyrif</label>
            </div>
            <div class="col-sm-8">
              <select name="musyrif" class="form-control">
                <?php if ($dk['IdMusyrif']) : ?>
                  <option value="<?= $dk['IdMusyrif']; ?>"><?= $dk['NamaMusyrif']; ?></option>
                  <option value=""> -- Pilih Musyrif -- </option>
                  <?php foreach ($musyrif as $mus) : ?>
                    <option value="<?= $mus['IdMusyrif']; ?>"><?= $mus['NamaMusyrif']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Musyrif -- </option>
                  <?php foreach ($musyrif as $mus) : ?>
                    <option value="<?= $mus['IdMusyrif']; ?>"><?= $mus['NamaMusyrif']; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
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
<?php endforeach; ?>
<!-- /.modal -->