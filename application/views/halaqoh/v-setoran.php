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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Setoran">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSetoran"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Isi Target</th>
                    <th>Jadwal Halaqoh</th>
                    <th>Kelompok</th>
                    <th>Presensi</th>
                    <th>Keterangan</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($setoran as $setor) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $setor['IsiTarget']; ?></td>
                      <td><?= $setor['Waktu']; ?></td>
                      <td><?= $setor['NamaKelompok']; ?> (<?= $setor['NamaLengkap']; ?>)</td>
                      <td><?= $setor['Presensi']; ?></td>
                      <td><?= $setor['Keterangan']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editSetoran<?= $setor['IdSetoran']; ?>">Ubah</button>
                        <a href="<?= base_url('halaqoh/setoran/delete/' . $setor['IdSetoran']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Setoran" namaData=<?= $setor['NamaKelompok']; ?>>Hapus</a>
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


<!-- Modal AddSetoran -->
<div class="modal fade" id="addSetoran">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Setoran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('halaqoh/setoran/add'); ?>
        <!-- Isi Target -->
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="isi">Isi Target</label>
          </div>
          <div class="col-sm-8">
            <select name="isi" class="form-control">
              <option> -- Pilih Isi Target -- </option>
              <?php foreach ($detail_target as $dt) : ?>
                <option value="<?= $dt['IdDetailTarget']; ?>"><?= $dt['NamaKelas']; ?> | <?= $dt['IsiTarget']; ?> | <?= $dt['Keterangan']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Waktu/Jadwal -->
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="jadwalHalaqoh">Jadwal Halaqoh</label>
          </div>
          <div class="col-sm-8">
            <select name="jadwalHalaqoh" class="form-control">
              <option> -- Pilih Jadwal -- </option>
              <?php foreach ($jadwal as $j) : ?>
                <option value="<?= $j['IdJadwal']; ?>"><?= $j['Waktu']; ?> | <?= $j['Ket']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Kelompok -->
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="Kelompok">Kelompok</label>
          </div>
          <div class="col-sm-8">
            <select name="kelompok" class="form-control">
              <option> -- Pilih Kelompok -- </option>
              <?php foreach ($detail_kelompok as $k) : ?>
                <option value="<?= $k['IdDetailKelompok']; ?>"><?= $k['NamaKelompok']; ?> | <?= $k['NamaKelas']; ?> - <?= $k['NamaLengkap']; ?> </option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Presensi -->
        <div class="form-group">
          <label for="presensi">Presensi</label>
          <input type="text" class="form-control" id="presensi" placeholder="Presensi" name="presensi" required autocomplete="off">
        </div>
        <!-- Keterangan -->
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan" required autocomplete="off">
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

<!-- Modal EditSetoran -->
<?php foreach ($setoran as $str) : ?>
  <div class="modal fade" id="editSetoran<?= $str['IdSetoran'] ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Setoran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('halaqoh/setoran/update/' . $str['IdSetoran']); ?>
          <!-- Isi Target -->
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="isi">Isi Target</label>
            </div>
            <div class="col-sm-8">
              <select name="isi" class="form-control">
                <?php if ($str['IdDetailTarget']) : ?>
                  <option value="<?= $str['IdDetailTarget']; ?>" selected><?= $str['IsiTarget']; ?> | <?= $str['Keterangan']; ?></option>
                  <option> -- Pilih Isi Target -- </option>
                  <?php foreach ($detail_target as $dt) : ?>
                    <option value="<?= $dt['IdDetailTarget']; ?>"><?= $dt['IsiTarget']; ?> | <?= $dt['Keterangan']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Isi Target -- </option>
                  <?php foreach ($detail_target as $dt) : ?>
                    <option value="<?= $dt['IdDetailTarget']; ?>"><?= $dt['IsiTarget']; ?> | <?= $dt['Keterangan']; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <!-- Waktu/Jadwal -->
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="jadwalHalaqoh">Jadwal Halaqoh</label>
            </div>
            <div class="col-sm-8">
              <select name="jadwalHalaqoh" class="form-control">
                <?php if ($str['IdJadwal']) : ?>
                  <option value="<?= $str['IdJadwal']; ?>" selected><?= $str['Waktu']; ?> | <?= $str['Ket']; ?></option>
                  <option> -- Pilih Jadwal -- </option>
                  <?php foreach ($jadwal as $j) : ?>
                    <option value="<?= $j['IdJadwal']; ?>"><?= $j['Waktu']; ?> | <?= $j['Ket']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Jadwal -- </option>
                  <?php foreach ($jadwal as $j) : ?>
                    <option value="<?= $j['IdJadwal']; ?>"><?= $j['Waktu']; ?> | <?= $j['Ket']; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <!-- Kelompok -->
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="Kelompok">Kelompok</label>
            </div>
            <div class="col-sm-8">
              <select name="kelompok" class="form-control">
                <?php if ($str['IdDetailKelompok']) : ?>
                  <option value="<?= $str['IdDetailKelompok']; ?>" selected><?= $str['NamaKelompok']; ?> | <?= $str['NamaLengkap']; ?></option>
                  <option> -- Pilih Kelompok -- </option>
                  <?php foreach ($detail_kelompok as $k) : ?>
                    <option value="<?= $k['IdDetailKelompok']; ?>"><?= $k['NamaKelompok']; ?> - <?= $k['NamaLengkap']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Kelompok -- </option>
                  <?php foreach ($detail_kelompok as $k) : ?>
                    <option value="<?= $k['IdDetailKelompok']; ?>"><?= $k['NamaKelompok']; ?> - <?= $k['NamaLengkap']; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <!-- Presensi -->
          <div class="form-group">
            <label for="presensi">Presensi</label>
            <input type="text" class="form-control" id="presensi" placeholder="Presensi" name="presensi" value="<?= $str['Presensi']; ?>" required autocomplete="off">
          </div>
          <!-- Keterangan -->
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan" value="<?= $str['Keterangan']; ?>" required autocomplete="off">
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