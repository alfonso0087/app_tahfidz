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
                <a href="<?= base_url('halaqoh/Setoran/export_excel'); ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-excel"></i> Export Data</a>
                <a href="<?= base_url('halaqoh/setoran/reset_data'); ?>" class="btn btn-warning ml-3" onclick="return confirm('Reset Data Setoran?');"><i class="fas fa-ban"></i> Reset Data</a>
              </div>

              <!-- Form Pencarian -->
              <div class="row" style="text-align: right;">
                <div class="col-sm-9">
                </div>
                <div class="col-sm-3">
                  <form class="form-inline" action="<?= base_url('halaqoh/Setoran/cari_data'); ?>" method="POST">
                    <label class="sr-only" for="inlineFormInputName2">Cari</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Masukkan Nama Kelompok" name="nama_kelompok">
                    <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-fw fa-search"></i> Cari</button>
                  </form>
                </div>
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
        <!-- Pilih Kelas -->
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="kelas">Kelas</label>
          </div>
          <div class="col-sm-8">
            <select name="kelas" class="form-control">
              <option> -- Pilih Kelas -- </option>
              <?php foreach ($kelas as $kls) : ?>
                <option value="<?= $kls['IdKelas']; ?>" idkelas="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Isi Target -->
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="isi">Isi Target</label>
          </div>
          <div class="col-sm-8">
            <select name="isi" class="form-control" id="isi_target">
              <option> -- Pilih Isi Target -- </option>
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
              <?php foreach ($kelompok as $k) : ?>
                <option value="<?= $k['IdKelompok']; ?>" IdKelompok="<?= $k['IdKelompok']; ?>"><?= $k['NamaKelompok']; ?> </option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Santri/Detail Kelompok -->
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="detailKelompok">Santri</label>
          </div>
          <div class="col-sm-8">
            <select name="kelompok" class="form-control" id="detail_kelompok">
              <option> -- Pilih Santri -- </option>
            </select>
          </div>
        </div>
        <!-- Presensi -->
        <div class="form-group">
          <label for="presensi">Presensi</label>
          <!-- <input type="text" class="form-control" id="presensi" placeholder="Presensi" name="presensi" required autocomplete="off"> -->
          <select name="presensi" class="form-control">
            <option> -- Pilih Presensi -- </option>
            <option value="Masuk">Masuk</option>
            <option value="Tidak Masuk">Tidak Masuk</option>
          </select>
        </div>
        <!-- Keterangan -->
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <!-- <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan" required autocomplete="off"> -->
          <select name="keterangan" class="form-control">
            <option> -- Pilih Keterangan -- </option>
            <option value="Selesai">Selesai</option>
            <option value="Tidak Selesai">Tidak Selesai</option>
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
              <select name="isi" class="form-control" disabled="disabled">
                <?php if ($str['IdDetailTarget']) : ?>
                  <option value="<?= $str['IdDetailTarget']; ?>" selected><?= $str['IsiTarget']; ?> | <?= $str['Keterangan']; ?></option>
                  <option> -- Pilih Isi Target -- </option>
                  <?php foreach ($detail_target as $dt) : ?>
                    <option value="<?= $dt['IdDetailTarget']; ?>"><?= $dt['NamaKelas']; ?> | <?= $dt['IsiTarget']; ?> | <?= $dt['Keterangan']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Isi Target -- </option>
                  <?php foreach ($detail_target as $dt) : ?>
                    <option value="<?= $dt['IdDetailTarget']; ?>"><?= $dt['NamaKelas']; ?> | <?= $dt['IsiTarget']; ?> | <?= $dt['Keterangan']; ?></option>
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
              <select name="jadwalHalaqoh" class="form-control" disabled="disabled">
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
              <select name="kelompok" class="form-control" disabled="disabled">
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
            <select name="presensi" class="form-control">
              <?php if ($str['Presensi']) : ?>
                <option value="<?= $str['Presensi']; ?>" selected><?= $str['Presensi']; ?></option>
                <option> -- Pilih Presensi -- </option>
                <option value="Masuk">Masuk</option>
                <option value="Tidak Masuk">Tidak Masuk</option>
              <?php else : ?>
                <option> -- Pilih Presensi -- </option>
                <option value="Masuk">Masuk</option>
                <option value="Tidak Masuk">Tidak Masuk</option>
              <?php endif; ?>
            </select>
            <!-- <input type="text" class="form-control" id="presensi" placeholder="Presensi" name="presensi" value="<?= $str['Presensi']; ?>" required autocomplete="off"> -->
          </div>
          <!-- Keterangan -->
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <select name="keterangan" class="form-control">
              <?php if ($str['Keterangan']) : ?>
                <option value="<?= $str['Keterangan']; ?>" selected><?= $str['Keterangan']; ?></option>
                <option> -- Pilih Keterangan -- </option>
                <option value="Selesai">Selesai</option>
                <option value="Tidak Selesai">Tidak Selesai</option>
              <?php else : ?>
                <option> -- Pilih Keterangan -- </option>
                <option value="Selesai">Selesai</option>
                <option value="Tidak Selesai">Tidak Selesai</option>
              <?php endif; ?>
            </select>
            <!-- <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan" value="<?= $str['Keterangan']; ?>" required autocomplete="off"> -->
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

<script type="text/javascript">
  // cek_nilai();

  $(document).ready(function() {
    $("select[name=kelas]").on("change", function() {
      var idKelas = $("option:selected", this).attr("idkelas");
      var idKelompok = $("option:selected", this).attr("IdKelompok");
      // alert(idKelompok);
      $.ajax({
        type: "POST",
        url: "<?= base_url('halaqoh/Setoran/getDetailTargetByKelas') ?>",
        data: 'id_kelas=' + idKelas,
        success: function(detailTarget) {
          // alert(detailTarget);
          $("select[id=isi_target]").html(detailTarget);
        }
      });
    });
  });
  $(document).ready(function() {
    $("select[name=kelompok]").on("change", function() {
      var idKelompok = $("option:selected", this).attr("IdKelompok");
      // alert(idKelompok);
      $.ajax({
        type: "POST",
        url: "<?= base_url('halaqoh/Setoran/getSantriByKelompok') ?>",
        data: 'id_kelompok=' + idKelompok,
        success: function(detailKelompok) {
          // alert(detailTarget);
          $("select[id=detail_kelompok]").html(detailKelompok);
        }
      });
    });
  });
</script>