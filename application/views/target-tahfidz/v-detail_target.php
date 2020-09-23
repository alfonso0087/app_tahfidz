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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Detail Target">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDetailTarget"><i class="fas fa-plus"></i> Tambah Data</button>
                <!-- <button type="button" class="btn btn-outline-primary ml-2" data-toggle="modal" data-target="#importDetailTarget"><i class="fas fa-fw fa-file-upload"></i> Import Data</button> -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDetailTarget"><i class="fas fa-plus"></i> Tambah Data</button> -->
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Pekan</th>
                    <th>Isi Target</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($detail as $det) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $det['Pekan']; ?></td>
                      <td><?= $det['IsiTarget']; ?></td>
                      <td><?= $det['Keterangan']; ?></td>
                      <td><?= date('d F Y', strtotime($det['Tgl'])); ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editDetailTarget<?= $det['IdDetailTarget']; ?>">Ubah</button>
                        <a href="<?= base_url('tahfidz/detail_target/delete/' . $det['IdDetailTarget']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Detail Target" namaData=<?= $det['Pekan']; ?>>Hapus</a>
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

<!-- Modal Add Detail Target -->
<div class="modal fade" id="addDetailTarget">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Detail Target</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('tahfidz/detail_target/add'); ?>
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="pekan">Pekan</label>
          </div>
          <div class="col-sm-8">
            <select name="pekan" class="form-control">
              <option> -- Pilih Pekan -- </option>
              <?php foreach ($target as $tgt) : ?>
                <option value="<?= $tgt['IdTarget']; ?>">Pekan Ke - <?= $tgt['Pekan']; ?> | Kelas - <?= $tgt['NamaKelas']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="isi">Isi Target</label>
          </div>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="isi" placeholder="Masukkan Isi Target" name="isi" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="keterangan">Keterangan</label>
          </div>
          <div class="col-sm-8">
            <textarea name="keterangan" class="form-control" rows="5" placeholder="Isikan Keterangan Target"></textarea>
          </div>
          <!-- <input type="text" class="form-control" id="isi" placeholder="Masukkan Keterangan Target" name="keterangan" required> -->
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Tanggal</label>
          <div class="col-sm-8">
            <div class="input-group date" id="tglMulai" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#tglMulai" name="tgl" />
              <div class="input-group-append" data-target="#tglMulai" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
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


<!-- Modal Import Detail Target -->
<div class="modal fade" id="importDetailTarget">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Import Data Detail Target</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--  -->
        <?= form_open_multipart('tahfidz/detail_target/import'); ?>
        <div class="form-group">
          <label for="importDetailTarget">Pilih File</label>
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




<!-- Modal Edit Detail Target -->
<?php foreach ($detail as $dt) : ?>
  <div class="modal fade" id="editDetailTarget<?= $dt['IdDetailTarget']; ?>">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Detail Target</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('tahfidz/detail_target/update/' . $dt['IdDetailTarget']); ?>
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="pekan">Pekan</label>
            </div>
            <div class="col-sm-8">
              <select name="pekan" class="form-control">
                <option value="<?= $dt['IdTarget']; ?>">Pekan Ke - <?= $dt['Pekan']; ?> | Kelas - <?= $dt['NamaKelas']; ?></option>
                <?php foreach ($target as $tgt) : ?>
                  <option value="<?= $tgt['IdTarget']; ?>">Pekan Ke - <?= $tgt['Pekan']; ?> | Kelas - <?= $tgt['NamaKelas']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="isi">Isi Target</label>
            </div>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="isi" placeholder="Masukkan Isi Target" name="isi" value="<?= $dt['IsiTarget']; ?>" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="keterangan">Keterangan</label>
            </div>
            <div class="col-sm-8">
              <textarea name="keterangan" class="form-control" rows="5" placeholder="Isikan Keterangan Target"><?= $dt['Keterangan']; ?></textarea>
            </div>
          </div>
          <!-- Tanggal -->
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tanggal</label>
            <div class="col-sm-8">
              <div class="input-group date" id="edttglSelesai<?= $dt['IdDetailTarget']; ?>" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#edttglSelesai<?= $dt['IdDetailTarget']; ?>" name="tgl" value="<?= $dt['Tgl']; ?>" />
                <div class="input-group-append" data-target="#edttglSelesai<?= $dt['IdDetailTarget']; ?>" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
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

  <script>
    $(function() {
      $('#edttglSelesai<?= $dt['IdDetailTarget']; ?>').datetimepicker({
        format: 'YYYY-MM-DD'
      });
    });
  </script>
<?php endforeach; ?>
<!-- /.modal -->