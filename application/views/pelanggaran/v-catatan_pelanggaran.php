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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Pelanggaran">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPelanggaran"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama Santri</th>
                    <th>Jenis Iqob</th>
                    <th>Tanggal</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($pelanggaran as $pel) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $pel['NamaLengkap']; ?></td>
                      <td><?= $pel['JenisIqob']; ?></td>
                      <td><?= date('d F Y', strtotime($pel['Tgl'])); ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#UpdateCatatanPelanggaran<?= $pel['IdIqob']; ?>">Ubah</button>
                        <a href="<?= base_url('pelanggaran/catatan_pelanggaran/delete/' . $pel['IdIqob']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Detail Pelanggaran" namaData=<?= $pel['NamaLengkap']; ?>>Hapus</a>
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


<!-- Modal AddCatatan -->
<div class="modal fade" id="addPelanggaran">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Catatan Pelanggaran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('pelanggaran/catatan_pelanggaran/add'); ?>
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="nama">Nama Santri</label>
          </div>
          <div class="col-sm-8">
            <select name="nama" class="form-control">
              <option>Nama Santri</option>
              <?php foreach ($santri as $san) : ?>
                <option value="<?= $san['IdSiswa']; ?>"><?= $san['NamaLengkap']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4">
            <label for="jenisiqob">Jenis Iqob</label>
          </div>
          <div class="col-sm-8">
            <select name="jenisiqob" class="form-control">
              <option>Jenis Iqob</option>
              <?php foreach ($jenisiqob as $jp) : ?>
                <option value="<?= $jp['IdJenisIqob']; ?>"><?= $jp['JenisIqob']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
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


<!-- Modal UpdateCatatan -->
<?php foreach ($pelanggaran as $pg) : ?>
  <div class="modal fade" id="UpdateCatatanPelanggaran<?= $pg['IdIqob']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Catatan Pelanggaran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('pelanggaran/catatan_pelanggaran/update/' . $pg['IdIqob']); ?>
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="nama">Nama Santri</label>
            </div>
            <div class="col-sm-8">
              <select name="nama" class="form-control">
                <?php if ($pg['IdSiswa']) : ?>
                  <option value="<?= $pg['IdSiswa']; ?>"><?= $pg['NamaLengkap']; ?></option>
                  <option>Nama Santri</option>
                  <?php foreach ($santri as $san) : ?>
                    <option value="<?= $san['IdSiswa']; ?>"><?= $san['NamaLengkap']; ?></option>
                  <?php endforeach; ?>
              </select>
            <?php else : ?>
              <option>Nama Santri</option>
              <?php foreach ($santri as $san) : ?>
                <option value="<?= $san['IdSiswa']; ?>"><?= $san['NamaLengkap']; ?></option>
              <?php endforeach; ?>
              </select>
            <?php endif; ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="jenisiqob">Jenis Iqob</label>
            </div>
            <div class="col-sm-8">
              <select name="jenisiqob" class="form-control">
                <?php if ($pg['IdJenisIqob']) : ?>
                  <option value="<?= $pg['IdJenisIqob']; ?>"><?= $pg['JenisIqob']; ?></option>
                  <option>Jenis Iqob</option>
                  <?php foreach ($jenisiqob as $iqob) : ?>
                    <option value="<?= $iqob['IdJenisIqob']; ?>"><?= $iqob['JenisIqob']; ?></option>
                  <?php endforeach; ?>
              </select>
            <?php else : ?>
              <option>Jenis Iqob</option>
              <?php foreach ($jenisiqob as $iqob) : ?>
                <option value="<?= $iqob['IdJenisIqob']; ?>"><?= $iqob['JenisIqob']; ?></option>
              <?php endforeach; ?>
              </select>
            <?php endif; ?>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tanggal</label>
            <div class="col-sm-8">
              <div class="input-group date" id="edttglMulai<?= $pg['IdIqob']; ?>" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#edttglMulai<?= $pg['IdIqob']; ?>" name="tgl" value="<?= $pg['Tgl']; ?>" />
                <div class="input-group-append" data-target="#edttglMulai<?= $pg['IdIqob']; ?>" data-toggle="datetimepicker">
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
      $('#edttglMulai<?= $pg['IdIqob']; ?>').datetimepicker({
        format: 'YYYY-MM-DD'
      });
    });
  </script>
<?php endforeach; ?>
<!-- /.modal -->