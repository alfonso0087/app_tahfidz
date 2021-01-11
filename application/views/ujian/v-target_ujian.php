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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Target Ujian">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTargetUjian"><i class="fas fa-plus"></i> Tambah Data</button>
                <a href="<?= base_url('ujian/target_ujian/export_excel'); ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-excel"></i> Export Data</a>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Ujian</th>
                    <th>Keterangan</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($target_ujian as $tu) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $tu['NamaUjian']; ?></td>
                      <td><?= $tu['Keterangan']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editTargetUjian<?= $tu['IdTargetUjian']; ?>">Ubah</button>
                        <a href="<?= base_url('ujian/target_ujian/delete/' . $tu['IdTargetUjian']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Target Ujian" namaData=<?= $tu['NamaUjian']; ?>>Hapus</a>
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

<!-- Modal Add Target Ujian -->
<div class="modal fade" id="addTargetUjian">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Target Ujian</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('ujian/target_ujian/add'); ?>
        <div class="form-group">
          <label for="jenis_ujian">Nama Ujian</label>
          <select name="jenis_ujian" class="form-control">
            <option> -- Pilih Ujian -- </option>
            <?php foreach ($jenis_ujian as $ju) : ?>
              <option value="<?= $ju['IdJenisUjian']; ?>"><?= $ju['NamaUjian']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text" name="keterangan" class="form-control" autocomplete="off">
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
</div>
<!-- /.modal -->

<!-- Modal Add Target Ujian -->
<?php foreach ($target_ujian as $t_ujian) : ?>
  <div class="modal fade" id="editTargetUjian<?= $t_ujian['IdTargetUjian']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Target Ujian</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('ujian/target_ujian/update/' . $t_ujian['IdTargetUjian']); ?>
          <div class="form-group">
            <label for="jenis_ujian">Nama Ujian</label>
            <select name="jenis_ujian" class="form-control">
              <?php if ($t_ujian['IdJenisUjian']) : ?>
                <option value="<?= $t_ujian['IdJenisUjian']; ?>"><?= $t_ujian['NamaUjian']; ?></option>
                <option> -- Pilih Ujian -- </option>
                <?php foreach ($jenis_ujian as $ju) : ?>
                  <option value="<?= $ju['IdJenisUjian']; ?>"><?= $ju['NamaUjian']; ?></option>
                <?php endforeach; ?>
              <?php else : ?>
                <option> -- Pilih Ujian -- </option>
                <?php foreach ($jenis_ujian as $ju) : ?>
                  <option value="<?= $ju['IdJenisUjian']; ?>"><?= $ju['NamaUjian']; ?></option>
                <?php endforeach; ?>
              <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" autocomplete="off" value="<?= $t_ujian['Keterangan']; ?>">
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
  </div>
<?php endforeach; ?>
<!-- /.modal -->