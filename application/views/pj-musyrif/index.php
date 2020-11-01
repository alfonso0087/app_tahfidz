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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data PJ Musyrif">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPJMusyrif"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Musyrif</th>
                    <th>Jabatan</th>
                    <th>Nama Kelompok</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($pjmusyrif as $pm) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $pm['NamaMusyrif']; ?></td>
                      <td><?= $pm['JabatanTambahan']; ?></td>
                      <td><?= $pm['NamaKelompok']; ?></td>
                      <td>
                        <a href="<?= base_url('Pj_Musyrif/delete/' . $pm['IdPjMusyrif']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="PJ Musyrif" namaData=<?= $pm['NamaMusyrif']; ?>>Hapus</a>
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
<div class="modal fade" id="addPJMusyrif">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data PJ Musyrif</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('pj_musyrif/add'); ?>
        <div class="form-group">
          <label for="nama_musyrif">Nama Musyrif</label>
          <select name="nama_musyrif" class="form-control">
            <option value="">-- Pilih Musyrif --</option>
            <?php foreach ($musyrif as $mus) : ?>
              <option value="<?= $mus['IdMusyrif']; ?>"><?= $mus['NamaMusyrif']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="jabatan_musyrif">Jabatan Musyrif</label>
          <select name="jabatan_musyrif" class="form-control">
            <option value="">-- Pilih Jabatan Musyrif --</option>
            <option value="PJ Musyrif">PJ Musyrif</option>
          </select>
        </div>
        <div class="form-group">
          <label for="jabatan_tambahan">Jabatan Tambahan Musyrif</label>
          <select name="jabatan_tambahan" class="form-control">
            <option value="">-- Pilih Jabatan Tambahan Musyrif --</option>
            <option value="Wali Kelas">Wali Kelas</option>
            <option value="Tidak Ada">Tidak Ada</option>
          </select>
        </div>
        <div class="form-group">
          <label>Kelompok Halaqoh</label>
          <div class="select2-blue">
            <select class="select2" multiple="multiple" style="width: 100%;" data-dropdown-css-class="select2-blue" name="id_kelompok[]" data-placeholder=" -- Pilih Kelompok Halaqoh -- " id="santri">
              <?php foreach ($kelompok_halaqoh as $kh) : ?>
                <option value="<?= $kh['IdKelompok']; ?>"><?= $kh['NamaKelompok']; ?></option>
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


<!-- Modal EditMusyrif -->
<!-- <?php
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
<!-- </div> -->
<!-- /.modal-dialog -->
<!-- </div> -->
<?php endforeach; ?> -->
<!-- /.modal -->

<script>
  $(function() {
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });
</script>